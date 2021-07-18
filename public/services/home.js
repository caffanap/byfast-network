$(document).ready(function (){
  $.get(`${apiUrl}/get-paket`, (data) => {
    console.log(data)
    onSuccess(data);
  }).fail((error) => {
    onFail(error)
  });

  const packetContainer = $('#packet-container');
  const onSuccess = ({ data }) => {
    let sections = '';
    data.forEach((datum) => {
      let cards = '';
      datum.pakets.forEach((packet) => {
        cards += cardElement(packet);
      })

      sections += packetSection(datum, cards)
    });
    packetContainer.html(sections);
  }
  
  const cardElement = ({ id, name, harga: price, img }) => (`
    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
        <div class="pricingtable-wrapper style-2 m-md-b30">
            <div class="pricingtable-inner">
                <div class="pricingtable-title">
                    <h3>${name}</h3>
                    <p style="visibility: hidden"> a</p>
                </div>
                <div class="pricingtable-media m-b15">
                    <img src="${img}" width="125" alt="" />
                </div>
                <div class="pricingtable-price">
                    <h2 class="pricingtable-bx" style="font-size: 22px">Rp ${price}<small
                            class="pricingtable-type">/Bulan</small></h2>
                </div>
                <div class="pricingtable-footer">
                    <a href="${baseUrl}/paket/${id}" class="btn btn-primary gradient shadow rounded-xl">DETAIL</a>
                </div>
            </div>
        </div>
    </div>
  `);

  const packetSection = ({name}, cards) => (`
  <div class="container pt-5">
    <div class="section-head style-1 text-center mt-5">
        <h4 class="title">${name}</h4>
    </div>
    <div class="pricingtable-row pt-2">
      <div class="row justify-content-center">
        ${cards}
      </div>
    </div>
  </div>
  `);
});