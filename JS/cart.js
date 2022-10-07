function article_add (id) {
    untoasted({
        title: "sheeesh",
        content: "artikel wurde in den wrenkorb ge-yeeeted",
        buttons: [
            {
                text: "open inventory",
                onClick: function () {
                    window.location = "cart.php";
                }
            }
        ],
        autoClose: {
            delay: 10000
        }
    })
}