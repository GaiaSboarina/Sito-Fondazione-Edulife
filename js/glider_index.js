window.addEventListener('load',function(){
    document.querySelector('.glider').addEventListener('glider-slide-visible', function(event){
        var glider = Glider(this);
        console.log('Slide Visible %s', event.detail.slide)
    });
    document.querySelector('.glider').addEventListener('glider-slide-hidden', function(event){
        console.log('Slide Hidden %s', event.detail.slide)
    });
    document.querySelector('.glider').addEventListener('glider-refresh', function(event){
        console.log('Refresh')
    });
    document.querySelector('.glider').addEventListener('glider-loaded', function(event){
        console.log('Loaded')
    });

    window._ = new Glider(document.querySelector('.glider'), {
        slidesToShow: 1, //'auto',
        slidesToScroll: 1,
        itemWidth: 150,
        draggable: true,
        scrollLock: false,
        dots: '#dots',
        rewind: true,
        arrows: {
            prev: '.glider-prev',
            next: '.glider-next',
        },
        responsive: [
            {
                breakpoint: 800,
                settings: {
                    slidesToScroll: 1,
                    slidesToShow: 5,
                    itemWidth: 300,
                    slidesToShow: 'auto',
                    
                }
            },
            {
                breakpoint: 700,
                settings: {
                    slidesToScroll: 3,
                    slidesToShow: 3,
                    dots: false,
                    arrows: false,
                   
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToScroll: 2,
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 500,
                settings: {
                    slidesToScroll: 1,
                    slidesToShow: 1,
                    dots: false,
                    arrows: false,
                    scrollLock: true,
                }
            }
        ]
    });
  });