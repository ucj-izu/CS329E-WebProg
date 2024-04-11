var top_img = "ngc6217";
var img_src = new Array ("ngc6217", "m104", "m51", "interactGalaxy", "ngc1300", "galaxyCluster")
var caption = new Array ('NGC6217',
                         'M104',
                         'M51',
                         'Interacting Galaxies',
                         'NGC1300',
                         'Galaxy Cluster')


function get_img() {
    var rnd_idx = Math.trunc(Math.random() * img_src.length)
    return [img_src[rnd_idx], rnd_idx]
}

function changeImgAndCaption() {
    var new_img = get_img();
    styleTop = document.getElementById(top_img).style;
    styleNew = document.getElementById(new_img[0]).style;

    styleTop.zIndex = '0';
    styleNew.zIndex = '10';
    top_img = new_img[0];

    document.getElementById("caption").value = caption[new_img[1]];

}
