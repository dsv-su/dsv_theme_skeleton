function xmlhttpPost(roomName) {
    var strURL = 'ajax.php';
    var self = this;
    var xmlHttpReq = false;

    self.xmlHttpReq = new XMLHttpRequest();

    self.xmlHttpReq.open('POST', strURL, true);
    self.xmlHttpReq.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    self.xmlHttpReq.onreadystatechange = function() {
	if (self.xmlHttpReq.readyState == 4) {
	    document.getElementById('ajax_' + roomName).innerHTML = self.xmlHttpReq.responseText;
        }
    }

    self.xmlHttpReq.send('page=' + roomName);
}

function toggle(divId) {
    var elem = document.getElementById(divId);
    var parent = elem.parentNode.childNodes;
    room = parent[1];

    if (elem.style.display != 'none') {
	elem.style.display = 'none';
    } else {
	elem.style.display = 'block';
    }

    if ( room.className.match(/(?:^|\s)collapsed(?!\S)/) ) {
    room.className = room.className.replace( /(?:^|\s)collapsed(?!\S)/g , ' expanded' );
    } else {
    room.className = room.className.replace( /(?:^|\s)expanded(?!\S)/g , ' collapsed' );
    }
}


