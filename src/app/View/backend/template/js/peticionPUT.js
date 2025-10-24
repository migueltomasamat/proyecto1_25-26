function put(id, array){


    console.log("Hola");
    const myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/x-www-form-urlencoded");

    const urlencoded = new URLSearchParams();
    urlencoded.append("username", array["username"]);
    urlencoded.append("password", array["password"]);
    urlencoded.append("email", array["email"]);

    const requestOptions = {
        method: "PUT",
        headers: myHeaders,
        body: urlencoded,
        redirect: "follow"
    };

    fetch(`http://localhost:8080/director/{id}`, requestOptions)
        .then((response) => response.text())
        .then((result) => console.log(result))
        .catch((error) => console.error(error));


}