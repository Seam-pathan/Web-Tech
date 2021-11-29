function MyAjaxFunc() {
    var xhttp = new XMLHttpRequest();
    var res;
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        res = JSON.parse(this.responseText);
        console.log(res);
        var maincontainer = document.getElementById("userinfo");
        var l = Object.keys(res).length;
        console.log(l);
        var d;
        var a;
        d = document.createElement("div");
        d.innerHTML = `<table border="1">
    	`;
        maincontainer.appendChild(d);
        for (i = 0; i < l; i++) {
          
          d.innerHTML = `
          <thead>
          <tr>
              <th>Transaction</th>
              <th>To</th>
              <th>Amount</th>
              <th>Transferred On</th>
          </tr>
          </thead>
          `;
          maincontainer.appendChild(d);
        }
        d.innerHTML=`</table>`;
        maincontainer.appendChild(d);
      }
    };

    xhttp.open("POST", "getinfo.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send();
  }