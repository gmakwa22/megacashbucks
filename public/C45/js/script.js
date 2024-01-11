var topSlider = {
    sliderBackground : document.getElementById('top-slider-background'),
    scaleBlock : document.getElementById('scale-block'),
    whiteBlockBackground : document.getElementById('white-block-background'),
    sliderScale : document.getElementById('scale'),
    currentDeg : 88.69,
    addButton: document.getElementById('addSum'),
    reduceButton: document.getElementById('reduceSum'),
    getCenterCoords : function(){
        let sliderBackground = this.sliderBackground.getBoundingClientRect()
        return {
            x: Math.floor(sliderBackground.x + sliderBackground.width/2),
            y: Math.floor(sliderBackground.y + sliderBackground.height),
        }
    },
    move: function(deg){
        let sliderScale = this.sliderScale
        sliderScale.style.transform = `rotate(${deg}deg)`;
    }
}

var topSliderButton = {
    elem: document.getElementById('top-slider-button'),
    buttonScale: document.getElementById('button-scale'),
    isDown: false,
    move: function(deg){
        let buttonScale = this.buttonScale
        buttonScale.style.transform = `rotate(${deg}deg)`;
    }
}

var form = {
    sumValue: document.getElementsByName('sum')[0],
    minAmount: 0,
    maxAmount: 1500,
    initialAmount: 800,
    currentAmount: 800,
    amount: document.getElementById('amount'),
    countAmountDeg: function(){

    },
    updateAmount: function(){

    },
    add: function(value){
        if(this.maxAmount < (this.currentAmount + value)){
            this.currentAmount =  this.maxAmount
        }
        else{
            this.currentAmount += value
        }
        this.amount.innerHTML = this.currentAmount
        this.sumValue.value = this.currentAmount
        topSlider.currentDeg = Math.ceil(form.currentAmount / ( (form.maxAmount )/180 ) )
        topSlider.move(topSlider.currentDeg)
        topSliderButton.move(topSlider.currentDeg)
    },
    reduce: function(value){
        if(this.minAmount > (this.currentAmount - value)){
            this.currentAmount =  this.minAmount
        }
        else{
            this.currentAmount -= value
        }

        this.amount.innerHTML = this.currentAmount
        this.sumValue.value  = this.currentAmount
        topSlider.currentDeg = Math.ceil(form.currentAmount / ( (form.maxAmount )/180 ) )
        topSlider.move(topSlider.currentDeg)
        topSliderButton.move(topSlider.currentDeg)
    },
    goto: function(value){
        topSlider.currentDeg = Math.ceil(value/0.76) * 0.76
        form.currentAmount = Math.ceil(Math.ceil(topSlider.currentDeg * ( (form.maxAmount )/180 ) ) /10 ) * 10
        this.amount.innerHTML = this.currentAmount
        this.sumValue.value  = this.currentAmount
        topSlider.move(topSlider.currentDeg)
        topSliderButton.move(topSlider.currentDeg)
    }
}

var moveSliders = function(mousePosition, goto = false){
    let center = topSlider.getCenterCoords()
    let xLine = center.x - mousePosition.x
    let yLine = center.y - mousePosition.y
    if(yLine < 0){
        yLine = 0;
    }
    let newDeg = 180 / Math.PI * Math.atan2(yLine, xLine);
    if( goto ){
        form.goto(newDeg)
    }
    if((newDeg > topSlider.currentDeg + 0.76 || newDeg < topSlider.currentDeg - 0.76) && !(newDeg > 180) && !(newDeg < 0)){
        if(newDeg > topSlider.currentDeg + 0.76){
            form.add(10)
        }
        else{
            form.reduce(10)
        }
    }
}

topSlider.scaleBlock.addEventListener('click', function(event){
    if(event.target !== topSlider.whiteBlockBackground){
        mousePosition = {
            x : event.clientX,
            y : event.clientY
        };
        moveSliders(mousePosition, true)
    }
}, true)

topSlider.addButton.addEventListener('click', function(event){
    event.preventDefault()
    form.add(150)
}, true)

topSlider.reduceButton.addEventListener('click', function(event){
    event.preventDefault()
    form.reduce(150)
}, true)

topSliderButton.elem.addEventListener('mousedown', function(event){
    event.preventDefault();
    topSliderButton.isDown = true
    topSlider.sliderScale.classList.remove('transition')
    topSliderButton.buttonScale.classList.remove('transition')
})

topSliderButton.elem.addEventListener('touchstart', function(event){
    topSliderButton.isDown = true
    topSlider.sliderScale.classList.remove('transition')
    topSliderButton.buttonScale.classList.remove('transition')
}, {passive: true})

document.addEventListener('mouseup', function() {
    topSliderButton.isDown = false
    topSlider.sliderScale.classList.add('transition')
    topSliderButton.buttonScale.classList.add('transition')
}, true)

topSliderButton.elem.addEventListener('touchend', function(event){
    topSliderButton.isDown = true
    topSlider.sliderScale.classList.add('transition')
    topSliderButton.buttonScale.classList.add('transition')
})

document.addEventListener('mousemove', function(event) {
    event.preventDefault();
    if (topSliderButton.isDown) {
        mousePosition = {
            x : event.clientX,
            y : event.clientY
        };
        moveSliders(mousePosition)
    }
}, true)

document.addEventListener('touchmove', function(event) {
    if (topSliderButton.isDown) {
        mousePosition = {
            x : event.touches[0].clientX,
            y : event.touches[0].clientY
        };
        moveSliders(mousePosition)
    }
}, { passive: false })


var init = function(){
    topSlider.move(topSlider.currentDeg)
    topSliderButton.move(topSlider.currentDeg)
}

init()


/*
 *  Terms slider
 *
*/

var termSlider = {
    sumValue: document.getElementsByName('term')[0],
    item1: document.getElementById('item1'),
    item2: document.getElementById('item2'),
    item3: document.getElementById('item3'),
    progressLine: document.getElementById('progress-line'),
    item2Info: document.getElementById('item2-info'),
    item3Info: document.getElementById('item3-info'),
    flag: document.getElementById('flag'),
    hide: function(){
        this.item2Info.style.display = "none"
        this.item3Info.style.display = "none"
        this.item2Info.style.opacity = 0
        this.item3Info.style.opacity = 0
    }
}

termSlider.item1.addEventListener('click', function(event){
    termSlider.hide()
    termSlider.flag.innerHTML = 1
    termSlider.progressLine.style.width = '0%'
    termSlider.sumValue.value = 1
}, true)
termSlider.item2.addEventListener('click', function(event){
    termSlider.hide()
    termSlider.item2Info.style.display = "block"
    termSlider.item2Info.style.opacity = 1
    termSlider.flag.innerHTML = 2
    termSlider.progressLine.style.width = '50%'
    termSlider.sumValue.value = 2
}, true)
termSlider.item3.addEventListener('click', function(event){
    termSlider.hide()
    termSlider.item3Info.style.display = "block"
    termSlider.item3Info.style.opacity = 1
    termSlider.flag.innerHTML = 3
    termSlider.progressLine.style.width = '100%'
    termSlider.sumValue.value = 3
}, true)


/*
 *
 *  Selector
 *
 */

 var selector = {
    province: document.getElementsByName('province')[0],
    elem: document.getElementById('selector'),
    menu: document.getElementById('selector'),
    dropdown: document.getElementById('dropdown'),
    menuItems: document.getElementsByClassName('selector-item'),
    selectorResult: document.getElementById('selector-result'),

    showItems: function(){
        this.dropdown.style.height = '300px'
    },
    hideItems: function(){
        this.dropdown.style.height = '0px'
    }
 }

 selector.elem.addEventListener('click', function(event){
    if(!selector.elem.classList.contains('active')){
        selector.showItems()
        selector.elem.classList.add('active')
    }
    else{
        selector.hideItems()
        selector.elem.classList.remove('active')
    }
}, true)



Array.from(selector.menuItems).forEach(function(element) {
    element.addEventListener('click', function(){
        Array.from(selector.menuItems).forEach(function(item) {
            item.classList.remove('selected')
        })
        element.classList.add('selected')
        selector.selectorResult.innerHTML = element.innerHTML
        selector.province.value = element.innerHTML
        selector.dropdown.style.height = '0px'
    })
})




document.body.addEventListener('click', function(event){
    if(event.target != selector.menu && event.target != selector.dropdown && event.target != selector.selectorResult){
        selector.dropdown.style.height = '0px'
        selector.elem.classList.remove('active')
    }
})
