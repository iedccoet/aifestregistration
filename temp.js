  //function to generate the card if the startup button is clicked -- dveloping 
  function startupinit(){
    for (i; i > 0; i--) {
    var elem = document.getElementById("card"+i);
    if(elem){elem.parentNode.removeChild(elem);}
    // var btnelm = document.getElementById("plusbtn"+i);
    // var btnelm1 = document.getElementById("minusbtn"+i);
    // if(btnelm != null){
    //   btnelm.parentNode.removeChild(btnelm);
    // btnelm1.parentNode.removeChild(btnelm1);
    // }
    }
    i++;  
    var detail = '<div class="participant z-depth-3" id = "card'+i+'">\
                    <h2 class="cardheading">Participant #'+i+'</h2>\
                    <div class="row">\
                      <div class="input-field col s6">\
                        <input  id="first_name'+i+'" name="first_name'+i+'" type="text" class="validate" required>\
                        <label for="first_name'+i+'">First Name</label>\
                      </div>\
                    <div class="input-field col s6">\
                      <input  id="last_name'+i+'" name="last_name'+i+'" type="text" class="validate" required>\
                      <label for="last_name'+i+'">Last Name</label>\
                    </div>\
                  </div>\
                  <div class="row">\
                    <div class="input-field col s12">\
                      <input id="email'+i+'" name="email'+i+'" type="email" class="validate" required>\
                      <label for="email'+i+'">Email</label>\
                      <span class="" data-error="wrong" data-success="right"></span>\
                    </div>\
                  </div>\
                  <div class="row">\
                    <div class="input-field col s6">\
                        <input id="number'+i+'" name="mobile'+i+'" type="text" class="validate" required>\
                        <label for="number'+i+'">Mobile N.o</label>\
                      </div>\
                      \
                  </div>\
               <label> T-shirt size</label>\
                  <div class="row s12">\
\
\
                    <div class="col">\
                        <p>\
                            <label>\
                              <input class="with-gap" name="group3'+i+'" type="radio" value="S" checked />\
                              <span>S</span>\
                            </label>\
                          </p>\
                          <p>\
                            <label>\
                              <input class="with-gap" name="group3'+i+'" type="radio" value="M" />\
                              <span>M</span>\
                            </label>\
                          </p>\
                          \
                      </div>\
  </div>';
    document.getElementById('startup').innerHTML += detail;
  }