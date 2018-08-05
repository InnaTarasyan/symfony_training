$('#app-list').DataTable({
    "processing": true,
    "serverSide": true,
    "ajax":  {
        url: $('#my_apps').val(),
        data: {'type':'apps'}
    },
    "sAjaxDataProp": "data",
    //"pageLength": 10,
    "lengthMenu": [[4, 5, 10, 25, 36], [4, 5, 10, 25, 36]],
    "columns":[
        {"data": "id"},
        {"data": "name"},
        {"data": "description"},
        {"data": "img"},
        {"data": "url"},
        {"data": "type"},
        {"data": "download_count"}
    ],
    "fnRowCallback": function( nRow, aData, iDisplayIndex ) {
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");

        $(nRow.cells[3].firstChild).on("click", function(){
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        });

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
    }
});


$('#web-app-table').DataTable({
    "processing": true,
    "serverSide": true,
    "ajax":  {
        url:  $('#my_apps').val(),
        data: {'type':'web'}
    },
    "sAjaxDataProp": "data",
    //"pageLength": 10,
    "lengthMenu": [[4, 5, 10, 25, 36], [4, 5, 10, 25, 36]],
    "columns":[
        {"data": "id"},
        {"data": "name"},
        {"data": "description"},
        {"data": "img"},
        {"data": "url"},
        {"data": "type"},
        {"data": "download_count"}
    ],
    "fnRowCallback": function( nRow, aData, iDisplayIndex ) {
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");

        $(nRow.cells[3].firstChild).on("click", function(){
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        });

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
    }
});

function myMap() {
    var myCenter = new google.maps.LatLng(40.182344, 44.513337);
    var mapCanvas = document.getElementById("map");
    var mapOptions = {center: myCenter, zoom: 6};
    var map = new google.maps.Map(mapCanvas, mapOptions);
    var marker = new google.maps.Marker({position:myCenter});
    marker.setMap(map);
}


// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("topBtn").style.display = "block";
    } else {
        document.getElementById("topBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}


