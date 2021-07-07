function alertMsg(msg, bgcolor) {

    $.toast({
        heading: 'Top Right',
        text: msg,
        position: 'top-right',
        loaderBg: '#fff',
        bgColor: bgcolor,
        hideAfter: 3500
    });

}