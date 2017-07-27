
(function(){
    $(".casino-shows").bootstrapNews({
        newsPerPage: 5,
        autoplay: true,
        pauseOnHover: true,
        navigation: false,
        direction: 'down',
        newsTickerInterval: 2500,
        onToDo: function () {
            console.log(this);
        }
    });
}());