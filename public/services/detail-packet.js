$(document).ready(function (){
  const id = window.location.pathname.slice(-1)[0];
  $.get(`${apiUrl}/get-paket/${id}`, (data) => {
    onSuccess(data);
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
      <h2 class="title" style="font-size: 40px">${name}</h2>
      <div class="mt-3">${desc}</div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-12 mb-3">
          <h5 class="text-center">PAKET ${kategori.name}</h5>
      </div>
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
      <div class="col-md-12 mb-3 mt-5">
          <h5 class="text-center">HARGA HANYA</h5>
          <h5 class="text-center">Rp. ${harga}</h5>
      </div>
    </div>
  `);
});