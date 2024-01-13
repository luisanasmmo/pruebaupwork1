document.addEventListener('DOMContentLoaded', function() {
    // TIME CIRCLES
    var countSeconds = document.querySelectorAll('.count');
    var countMinutes = document.querySelectorAll('.count-min');
    var count = 120;
    countSeconds.forEach(function (n) {
        return n.innerHTML = '00';
    });
    countMinutes.forEach(function (m) {
        return m.innerHTML = '02';
    });

    
    // Crear function secondsCounter para el contador marcha atras
    function secondsCounter() {
        // Decrementamos el valor del contador
        count--;

        let minutos = Math.floor(count / 60, 2);
        let segundos = count % 60;
        
        // Actualizamos el valor del contador en la pantalla
        countSeconds.forEach(function (n) {
            if (segundos < 10) {
                segundos = "0" + segundos;
              }
            return n.innerHTML = segundos;
        });

        countMinutes.forEach(function (n) {
            if (minutos < 10) {
                minutos = "0" + minutos;
              }
            return n.innerHTML = minutos;
        });
        
        // Si el contador llega a cero, terminamos el contador
        if (count === 0) {
            clearInterval(idIntervalo);
        }
    }
        
    // Iniciamos el contador
    let idIntervalo = setInterval(secondsCounter, 1000);


    // Crear function changePageColor para cambiar el color

    let title = document.querySelector('.title .title-accent')
    let logo = document.querySelectorAll('.ipad-logo .logo')
    let ipad = document.querySelector('.ipad-display .ipad')
    let tags = document.querySelectorAll('.ipad-display .deal-tag')
    let submitBtn = document.querySelector('#form_wrapper .submit-btn input')
    var r = document.querySelector(':root');

    document.querySelectorAll('.color').forEach(function(el) {
        el.addEventListener('click', function(e) {
            let color = e.target.dataset.id

            let rs = getComputedStyle(r);
            let hex = rs.getPropertyValue('--primary-'+color)
            title.style.color = hex

            logo.forEach(function(img) {
                img.setAttribute('src', 'img/logo-'+color+'.png')
            })

            tags.forEach(function(tag) {
                removeSelected(tag)
                tag.classList.add(color+'-selected')
            })

            ipad.style.backgroundImage = "url('img/color-"+color+".png')"

            if (submitBtn) {
                removeSelected(submitBtn)
                submitBtn.classList.add(color+'-selected')

                if (color == 'black') {
                    submitBtn.style.color = '#fff'
                } else {
                    submitBtn.style.color = '#000'
                }
            }

            let selectedColor = document.querySelector('.color.selected')
            removeSelected(selectedColor)            

            e.target.classList.add(color+'-selected')
            e.target.classList.add('selected')
        })
    })
    
    function removeSelected(obj) {
        console.log(obj);
        obj.classList.remove('selected')
        const classesToRemove = Array.from(obj.classList).filter(className => className.includes("-selected"));
        classesToRemove.forEach(className => obj.classList.remove(className));
    }

    });
