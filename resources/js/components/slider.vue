<template>
    <div class="wrapper">
        <div class="redCube"></div>
        <div class="fioCube"></div>
        <div class="slider_wrapper">
            <slither-slider ref="slider" :options="options">
                <custom-component v-for="item_data in slider_data" :key="item_data.id">
                    <sliderItem :item_data="item_data"></sliderItem>
                </custom-component>
            </slither-slider>
        </div>
    </div>
</template>

<script>
import "slither-slider/plugin-dist/slither-slider.css";
import sliderItem from './slider-item'
export default {
    components: {sliderItem},
    data(){
        return{
            slider_data:[],
            options:{
                autoplay: false,
                transition: "slide",
                dots: true,
                animatedDots: false,
                dotLimit: false,
                fullscreen: false,
                fullscreenOffset: null,
                controls: false,
                numberOfSlides: 3,
                controlsWrapperClass: null,
                animationDuration: 500,
                animationEasing: "easeOutQuint",
                slidePosition: "center",
                slideClass: null,
                sliderClass: null,
                secondsOnSlide: 4,
                clickableSlides: false,
                endless: false,
                cuts: "right",
                gap: 30,
                adaptiveHeight: false,
                loop: true,
                extras: 3,
                overflowHiddenPadding: { top: 0, left: 0, right: 0, bottom: 0 },
                touch: true,
                preserveGrid: false,
                swipeTolerance: 80
                }
            
        }
    },
    mounted(){
        this.update();
    },
    methods:{      
        async update() {
            try{
            const response = await axios.get('/getNews')  
                console.log(response);
                this.slider_data = response.data;
                console.log(slider_data);
                this.flagData = true;
                }
                catch{
                    
                }                
        }
    }
}
</script>

<style lang="scss" scoped>

.wrapper{
    position: relative;
}
.slider_wrapper{
    padding: 62px 14px 105px 14px;
}

.slider-slide {
  margin: 0 200px;
}

.slider-slides {
  padding-bottom: 100px;
}

.slither-slider-dot {
  width: 20px;
  height: 20px;

}
.redCube{
    height: 243px;
    width: 349px;
    background-color: #D51522;
    position: absolute;
    top: 48px;
    z-index: -2;
}
.fioCube{
    height: 243px;
    width: 349px;
    background-color: #6F61A0;;
    position: absolute;
    top: 76px;
    right: 0;
    z-index: -2;
}

</style>