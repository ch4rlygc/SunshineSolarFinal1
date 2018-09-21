var panels = ['280W Solar Panel',
              '260W Solar Panel',
              '100W Solar Panel',
              '80W Solar Panel',
              '60W Solar Panel',
              'Silicon',
              'German Technology'];

var buttonMoreDetails = {
    spanish : "Ver más detalles",
    english : "See more details"
};

var buttonClose = {
    spanish : "Cerrar",
    english : "Close"
};

var buttonCheckPrice = {
    spanish : "Cotizar",
    english : "Check the Price"
};

var panel280 = {
  name: "280W Solar Panel",
  watts : "280W",
  voltage : "35.OV",
  nombre : "Panel solar de 280W"
};

var panel260 = {
    name: "260W Solar Panel",
    watts : "260W",
    voltage : "29.5",
    nombre : "Panel solar de 260W"
};

var solarPanelsText = {
    spanish : "this is a test text",
    english : "Solar panels with German technology of 10, 15, 15, 20, 40, 60 watts and more..."
};

function drawPanels (panelTitle, btnDetails, idPanel, modalTitle, idCarousel, img1, img2, img3, img4, voltageText, voltage, powerText, power, materialText, material, btnClose, btnCheck) {

    let panelHtml =  '<div class="col-md-3 col-sm-12 ms_p_item brand panels">';
        panelHtml +=    '<img src="img/products/' + img1 + '" alt="">';
        panelHtml +=    '<div style="text-align: center;">';
        panelHtml +=        '<h3>' + panelTitle + '</h3>';
        panelHtml +=        '<button type="button" class="btn btn-success details" data-toggle="modal" data-target="#'+ idPanel +'">' + btnDetails + '</button><br><br>';
        panelHtml +=    '</div>';
        panelHtml += '</div>';
        panelHtml += '<div class="modal fade" id="'+ idPanel +'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">';
        panelHtml +=    '<div class="modal-dialog modal-dialog-centered" role="document">';
        panelHtml +=        '<div class="modal-content">';
        panelHtml +=            '<div class="modal-header">';
        panelHtml +=                '<h5 class="modal-title" id=" ">' + modalTitle + '</h5>';
        panelHtml +=                '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
        panelHtml +=                    '<span aria-hidden="true">&times;</span>';
        panelHtml +=                '</button>';
        panelHtml +=            '</div>';
        panelHtml +=            '<div class="modal-body">';
        panelHtml +=                '<div id="'+ idCarousel +'" class="carousel slide" data-ride="carousel">';
        panelHtml +=                    '<div class="carousel-inner">';
        panelHtml +=                        '<div class="carousel-item active">';
        panelHtml +=                            '<img class="d-block w-100" src="img/products/' + img1 + '" alt="First slide">';
        panelHtml +=                        '</div>';
        panelHtml +=                        '<div class="carousel-item">';
        panelHtml +=                            '<img class="d-block w-100 bigImage" src="img/products/' +  img2 + '" alt="First slide">';
        panelHtml +=                        '</div>';
        panelHtml +=                        '<div class="carousel-item">';
        panelHtml +=                            '<img class="d-block w-100 bigImage" src="img/products/' +  img3 + '" alt="First slide">';
        panelHtml +=                        '</div>';
        panelHtml +=                        '<div class="carousel-item">';
        panelHtml +=                            '<img class="d-block w-100 bigImage" src="img/products/' +  img4 + '" alt="First slide">';
        panelHtml +=                        '</div>';
        panelHtml +=                        '<a class="carousel-control-prev" href="#'+idCarousel+'" role="button" data-slide="prev">';
        panelHtml +=                            '<i class="fa fa-angle-left fa-2x nextAndPrevius" aria-hidden="true"></i>';
        panelHtml +=                        '</a>';
        panelHtml +=                        '<a class="carousel-control-next" href="#'+idCarousel+'" role="button" data-slide="next">';
        panelHtml +=                            '<i class="fa fa-angle-right fa-2x nextAndPrevius" aria-hidden="true"></i>';
        panelHtml +=                        '</a>';
        panelHtml +=                    '</div>';
        panelHtml +=                '</div>';
        panelHtml +=                '<p>'+ voltageText +': <strong>'+ voltage + '</strong></p>';
        panelHtml +=                '<p>'+ powerText +': <strong>'+ power + '</strong></p>';
        panelHtml +=                '<p>'+ materialText +': <strong>'+ material + '</strong></p>';
        panelHtml +=            '</div>';
        panelHtml +=            '<div class="modal-footer">';
        panelHtml +=                '<button type="button" class="btn btn-secondary" data-dismiss="modal">' + btnClose + '</button>';
        panelHtml +=                '<button type="button" class="btn btn-primary" data-dismiss="modal">' + btnCheck + '</button>';
        panelHtml +=            '</div>';
        panelHtml +=        '</div>';
        panelHtml +=    '</div>';
        panelHtml += '</div';

    document.write(panelHtml);

}









