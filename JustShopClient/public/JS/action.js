var temp = [];
var giohang = [];
$(document).ready(function() {


    // viết code cho phần back to top
    $(window).scroll(function() {

        if ($('html,body').scrollTop() >= 300) {
            $('.backTop').addClass('ACTIVE');
        } else {
            $('.backTop').removeClass('ACTIVE');
        }
    });
    $('.backTop').click(function(e) {
        e.preventDefault();
        $('html,body').animate({ scrollTop: 0 }, 1200);
    });
    // viết code cho phần giỏ hàng 

    $(".adds").click(function(e) {
        // lấy giá trị của sản phẩm khi đc click
        e.preventDefault();
        var IDsp = $(this).attr('maid');
        var namesp = $("#sp-" + IDsp).find(".tt").text();
        var giasp = $("#sp-" + IDsp).find(".gia").text();
        var anhsp = $("#sp-" + IDsp).find("img").attr("src");
        item = {
            id: IDsp,
            name: namesp,
            gia: giasp,
            anh: anhsp,
            soluong: 1

        };
        // phần kiểm tra giỏ hàng có sản phẩm trùng ID hay chưa
        // chưa add thêm sản phẩm 
        // nếu có rồi tăng số lượng lên 1 
        var flag = false;
        for (var i = 0; i < giohang.length; i++) {
            if (giohang[i].id == item.id) {
                flag = true;
                break;
            }
        }
        // sản phẩm chưa có trong giỏ hàng
        if (flag == false) {

            giohang.push(item);
        } else {
            giohang[i].soluong += 1;
        }
        getdata();
    });
});
// lưu dữ liệu vào local
function getdata() {
    if (typeof(localStorage) !== "undefined") {
        localStorage.setItem("vd", JSON.stringify(giohang));
    }

}
// xóa hết dữ liệu ở local
function remove() {
    localStorage.clear();
}

// khi load form chúng ta sẽ hiện lên ds sản phẩm
window.onload = function() {
        draw();
    }
    // vẽ từng dòng một
function draw() {
    var name = JSON.parse(localStorage.getItem('vd'));
    var row = "";
    var tong = 0;
    var tongsl = 0;
    $('#dsgiohang').empty();
    for (let i = 0; i < name.length; i++) {
        tong += name[i].soluong * name[i].gia;
        tongsl += name[i].soluong;
        row += `
        <tr>
        <td scope="row">
            <img class="anhsp" name="anhsp" src="${name[i].anh}" alt="">
        </td>
        <td>
            <p class="tensp" name="tensp">${name[i].name}</p>
        </td>
        <td>
            <input class="soluong" type="number" name="soluong" id="" value="${name[i].soluong}" onchange="changeNumber(this,${name[i].id})  ">
        </td>
        <td>
            <p class="Giass" name="giatien">${name[i].gia}</p>
        </td>
        <td>
            <p class="thanhtien" name="thanhtien">${name[i].soluong * name[i].gia}</p>
            <button class="btn btn-danger" type="reset" onclick="removes(${name[i].id})">Xóa</button>
        </td>
        </tr>
        `;

    }
    document.getElementById('data').value = JSON.stringify(name);
    document.getElementById('tongtien').value = tong.toString();
    document.getElementById('tongsl').value = tongsl.toString();
    $("#dsgiohang").append(row);
}

// xóa một phần tử
function removes(id) {
    var flag = false;
    var name = JSON.parse(localStorage.getItem('vd'));
    for (var i = 0; i < name.length; i++) {
        if (name[i].id == id) {
            name.splice(i, 1);
            if (localStorage.getItem("vd")) {
                localStorage.setItem("vd", JSON.stringify(name));
            }
        }
    }
    draw();
}
// khi thay đổi số lượng ở trang giỏ hàng
function changeNumber(e, id) {
    var names = JSON.parse(localStorage.getItem('vd'));
    var sol = e.value;
    if (sol > 0) {
        for (let i = 0; i < names.length; i++) {
            if (names[i].id == id) {
                names[i].soluong = sol;
            }
        }
        localStorage.setItem("vd", JSON.stringify(names));
        draw();
    } else {
        removes(id);
    }
}