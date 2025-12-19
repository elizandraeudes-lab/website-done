document.getElementById("loginForm")?.addEventListener("submit", function(e){
    e.preventDefault();
    
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;
    const notRobot = document.getElementById("notRobot").checked;

    if(!notRobot){
        alert("Por favor, confirme que você não é um robô!");
        return;
    }

    // Login simulado
    if(username === "admin" && password === "1234"){
        alert("Login bem-sucedido!");
        window.location.href = "dashboard.html";
    } else {
        alert("Usuário ou senha incorretos!");
    }
});