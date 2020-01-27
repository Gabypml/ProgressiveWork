const http = new XMLHttpRequest();
http.open("GET", "https://api.github.com/users/Gabypml/repos");
http.onreadystatechange = () => {
    if (http.readyState === 4 && http.status === 200) {
        //console.log(http.response);
        const donnees= JSON.parse(http.response);
        //console.log(donnees[name]);
        for(const tab of donnees){
            console.log(tab["name"]);
            document.getElementById("information").innerHTML+=`<p>${tab["name"]}</p>`;
        }
        
        ///JSON.parse(http.response).forEach(x => document.body.innerHTML += `<p>${x.name}</p>`)
    }
}
http.send();
