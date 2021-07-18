$(document).ready(function (){
  const checkButton = $('#check-button');
  const responseContainer = $('#response-container');

  $('#order-id').keypress((e) => {
    const key = e.which;
    if(key == 13) {
      checkButton.click();
      return false;  
    }
  })
  
  checkButton.click(async () => {
    const orderId = $('#order-id').val();
    await getOrder(orderId);
  })

  const getOrder = async (orderId) => {
    return $.post(`${apiUrl}/find-order`, { no_pemesanan: orderId}, function(data, status) {
      onSuccess(data);
    }).fail((error) => {
      onFail(error)
    });
  }

  const onSuccess = (data) => {
    const element = onSuccessElement(data);
    responseContainer.html(element)
  }
  
  const onSuccessElement = (data) => {
    console.log(data)
    const { message, data: datum } = data;
    const rows = datum[0];
    return `
      <div class="col-md-12">
          <h5 class="text-center">${message}!</h5>
      </div>
      <div class="col-md-6 mt-3">
          <table class="table">
              <tbody>
                  <tr>
                      <th scope="col">#Nomor Pemesanan</th>
                      <td>${rows.no_pemesanan}</td>
                  </tr>
                  </tr>
                  <tr>
                      <th scope="col">Nama</th>
                      <td>${rows.nama_lengkap}</td>
                  </tr>
                  </tr>
                  <tr>
                      <th scope="col">Alamat</th>
                      <td>${rows.alamat}</td>
                  </tr>
                  </tr>
                  <tr>
                      <th scope="col">Nomor HP</th>
                      <td>${rows.no_hp}</td>
                  </tr>
                  </tr>
                  <tr>
                      <th scope="col">Jenis Kelamin</th>
                      <td>${rows.jenkel}</td>
                  </tr>
                  </tr>
                  <tr>
                      <th scope="col">STATUS PEMASANGAN</th>
                      <td class="text-success text-bold">${rows.status_pemesanan.toUpperCase()}</td>
                  </tr>
                  </tr>
              </tbody>
          </table>
      </div>
    `;
  };

  const onFail = (data) => {
    const element = onFailElement(data);
    responseContainer.html(element)
  }

  const onFailElement = (data) => {
    let message;
    if(data.responseJSON) {
      console.log(data)
      message = data.responseJSON.message;
    } else {
      message = 'Terjadi kesalahan';
    }
    return `
      <div class="col-md-12">
          <h5 class="text-center text-danger">${message}!</h5>
      </div>
    `;
  }
  
});