

:root{
    --pink:#14c6c0;
    --purple:#a417d3;
    --gradient:linear-gradient(var(--pink),var(--purple));
}

*{
    margin: 0;padding: 0;
    box-sizing:border-box;
    font-family : 'Oswald', sans-serif;
}

.container{
    display: flex;
    height:100vh;
    background: url("bg1.jpg");
    background-size:cover;
    background-position:center;
}

.container:after{
    position:absolute;
    content:'';
    top:0;
    left:0;
    height:100%;
    width:100%;
    background:rgba(0,0,0,0.479);
}

.center{
    width:400px;
    margin:auto;
    border-radius:5px;
    padding:55px 45px 55px 45px;
    z-index:999;
    background: rgba(0,0,0,0.746);
    box-shadow:-1px 4px 28px 0px rgba(4, 181, 246, 0.486);
}

.center h2{
    text-align: center;
    color:#fff;
    margin-bottom: 20px;
}

.input-field{
    position:relative;
    display: flex;
    flex-direction: column;
    margin-bottom: 30px;
}

.input-field label{
    margin-bottom: 10px;
    font-weight: bold;
    color:#fff;
}

.input-field input{
    padding:10px 10px 10px 50px;
    background: transparent;
    border:1px solid var(--pink);
    color:#fff;
    outline:none;
    transition:all ease 0.3s;
}

.input-field input:focus{
    border:1px solid #fff;
}

.input-field i.fas{
    position:absolute;
    top:13px;
    left:16px;
    color:var(--pink);
}

.input-field button{
    padding:8px;
    background: var(--gradient);
    border:none;
    outline:none;
    cursor:pointer;
    color:#fff;
    font-size:16px;
}

p{
    color:#fff;
    font-weight: bold;
    font-size:16px;
    align-items: center;
}

a{
    color:var(--pink);
    text-decoration: none;
}

a:hover{
    color:rgb(186, 253, 0);
}

@media(max-width:450px){
    .center{
        width:90%;
    }
}

@media(max-width:320px){
    .center{
        width:90%;
        padding:25px 35px 25px 35px;
    }
    .input-field input::placeholder{
        font-size:12px;
    }
}