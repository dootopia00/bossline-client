
// PC, MOBILE 구별
function platformCheck() {

    var isPlatform = $('#isMobile').val();

    return isPlatform;
}

/**
 * * 현재 페이지와 이동 할 페이지가 같으면 true 
 * * 그렇지 않을 경우 false
 */
function getHash(getHash) {

    console.log('getHash : ', getHash);
    var hash = window.location.hash.split('/');
    var state = null;
    if(hash[1]){
        tmp = hash[1].split('?');
        state = (tmp[0] == getHash) ? true : false;
    }
    
    return state;
}
