$(document).ready(function (){
  const id = window.location.pathname.slice(-1)[0];
  const modalFooter = $('#modal-footer');
  $.get(`${apiUrl}/get-paket/${id}`, (data) => {
    onSuccess(data);
    setOptions(data);
  }).fail((error) => {
    alert('Terjadi kesalahan, reload halaman ini!')
  });

  const detailContainer = $('#detail-container');
  const onSuccess = ({data}) => {
    let rows = '';
    data.topping.forEach((item, index) => {
      rows += row(item, index)
    });
    const fullElement = element(data, rows)
    detailContainer.html(fullElement);
  }

  const setOptions = ({data}) => {
    const selectPacket = $('#select-packet');
    const selectTopping = $('#select-topping');

    selectPacket.html(option(data.paket, true));

    let toppingOptions = '';
    data.topping.forEach((item, index) => {
      const selected = index == 0;
      toppingOptions += option(item, selected)
    });
    selectTopping.html(toppingOptions);
  };
  
  const row = ({ name, desc, harga }, index) => (`
    <tr>
      <th scope="row">${index+1}</th>
      <td>${name}</td>
      <td>${desc}</td>
      <td>Rp${harga}</td>
    </tr>
  `);

  const element = ({paket: {name, kategori, harga, desc}}, rows) => (`
    <div class="section-head style-1 text-center">
      <h5 class="text-center text-primary">Paket ${kategori.name}</h5>
      <h2 class="title" style="font-size: 40px">${name}</h2>
      <div class="mt-3">${desc}</div>
    </div>
    <div class="col-md-12 mb-5 mt-5">
        <h4 class="text-center">HANYA</h4>
        <h2 class="text-center text-secondary">Rp ${harga}</h2>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6">
          <h6>Topping</h6>
          <table class="table table-striped">
              <thead>
                  <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Deskripsi</th>
                      <th scope="col">Harga</th>
                  </tr>
              </thead>
              <tbody>
                  ${rows}
              </tbody>
          </table>
      </div>
    </div>
  `);

  const option = ({ id, name, harga }, selected) => (`
    <option value="${id}" data-price="${harga}" selected="${selected}">${name} - Rp${harga}</option>
  `);

  const errorMessage = `
    <p class="text-danger text-center">Lengkapi datamu dulu ya!</p>
  `;

  const modalBodyElement = ({
    fullName, personalId, phone, gender, address, packet, packetPrice, topping, toppingPrice
  }) => (`
    <div class="container">
      <div class="row">
          <div class="col-md-12">
              <p>Anda akan memesan paket</p>
              <table class="table table-bordered">
                  <thead>
                      <tr>
                          <th scope="col">Produk</th>
                          <th scope="col">Nama</th>
                          <th scope="col">Harga</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td scope="row">Paket</td>
                          <td>${packet.html()}</td>
                          <td>Rp${packetPrice}</td>
                      </tr>
                      <tr>
                          <td scope="row">Topping</td>
                          <td>${topping.find('option:selected').html()}</td>
                          <td>Rp${toppingPrice}</td>
                      </tr>
                      <tr>
                          <td colspan="2" class="text-right">TOTAL</td>
                          <td>Rp${packetPrice + toppingPrice}</td>
                      </tr>
                  </tbody>
              </table>
              <p class="mt-3">dengan identitas pemesan</p>
              <table class="table table-bordered">
                  <tbody>
                      <tr>
                          <th scope="row">Nama</th>
                          <td>${fullName}</td>
                      </tr>
                      <tr>
                          <th scope="row">Nomor Identitas</th>
                          <td>${personalId}</td>
                      </tr>
                      <tr>
                          <th scope="row">Nomor HP</th>
                          <td>${phone}</td>
                      </tr>
                      <tr>
                          <th scope="row">Jenis Kelamin</th>
                          <td>${gender}</td>
                      </tr>
                      <tr>
                          <th scope="row">Alamat</th>
                          <td>${address}</td>
                      </tr>
                  </tbody>
              </table>
              <p class="mt-3">Silakan klik tombol konfirmasi di bawah ini jika data tersebut sudah benar.
              </p>
          </div>
      </div>
    </div>
  `);

  const modalFooterElement = `
    <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Batal</button>
    <button id="confirm-button" type="button" class="btn btn-primary">Konfirmasi Pemesanan</button>
  `;

  const modalFooterOnConfirmedElement = `
    <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
  `;

  const copy = (text) => {
    navigator.clipboard.writeText(text).then(function() {
      console.log('Copying to clipboard was successful!');
    }, function(err) {
      console.error('Could not copy text: ', err);
    });    
  }

  const confirmedModalBody = ({ message, orderNumber }) => (`
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
                <h5>${message}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>Nomor Pemesanan anda</p>
                <h6>${orderNumber}</h6>
                <a href="javascript:void(0)" id="copy-order-id" >SALIN</a>
                <p>Cek status pemesanan anda secara berkala <a href="${baseUrl}/cek-status-pemesanan">disini</a></p>
            </div>
        </div>
    </div>
  `);

  const handleConfirmButton = ({
    packetId, toppingId, fullName, personalId, phone, gender, address, packetPrice, toppingPrice,
  }) => {
    modalFooter.html(modalFooterOnConfirmedElement);
    $.post(`${apiUrl}/order`, {
      pakets_id: packetId,
      topping_pakets_id: toppingId,
      nama_lengkap: fullName,
      nomor_identitas: personalId,
      no_hp: phone,
      jenkel: gender,
      alamat: address,
      total_harga: packetPrice + toppingPrice,
    }, (data) => {
      const {message, data: {no_pemesanan: orderNumber}} = data;
      $('#modal-order-body').html(confirmedModalBody({
        message, orderNumber
      }));
      $('#copy-order-id').click(() => copy(orderNumber));
    }).fail((error) => {
      // onOrderFail()
    });
  };

  const handleOrderButton =  () => {
    modalFooter.html(modalFooterElement);
    const fullName = $('#full-name').val();
    const personalId = $('#personal-id').val();
    const phone = $('#phone').val();
    const gender = $('#gender').val();
    const address = $('#address').val();
    const packet = $('#select-packet');
    const packetId = packet.val();
    const packetPrice = packet.find('option:selected').data('price')
    const topping = $('#select-topping');
    const toppingId = topping.val();
    const toppingPrice = topping.find('option:selected').data('price')

    const errorMessageContainer = $('#error-message-container');
    const modalBody = $('#modal-order-body');
    
    if (fullName && personalId && phone && gender && address && packetId && toppingId ) {
      errorMessageContainer.html('');
      modalBody.html(modalBodyElement({
        fullName, personalId, phone, gender, address, packet, packetPrice, topping, toppingPrice
      }));
      $('#orderModal').modal('show')
      
      const confirmButton = $('#confirm-button');
      confirmButton.click(() => handleConfirmButton({
        packetId, toppingId, fullName, personalId, phone, gender, address, packetPrice, toppingPrice,
      }));
    } else {
      errorMessageContainer.html(errorMessage);
    }
  };
  
  $('#order-button').click(handleOrderButton);
});