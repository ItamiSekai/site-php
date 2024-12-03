<div class="conteudo">
    <button><a href="pagina-login.php">CRIE SUA CONTA</a></button>
</div>


<style>
    .conteudo {
        display: flex;               
        justify-content: center;     
        align-items: center;                      
    }

    button a{
        text-decoration: none;
        color: white;
    }

    button a:hover{
        color: white;
    }

    button {
        margin: auto;
        display: block;
        padding: 10px 15px;         
        font-size: 16px;            
        color: white;               
        background-color: #C72D3C;  
        border: none;              
        border-radius: 5px;       
        cursor: pointer;           
        transition: background-color 0.3s, transform 0.3s;
    }

    button:hover {
        background-color: #A52A2A;  
        transform: scale(1.03);
    }

    button:focus {
        outline: none;               
        box-shadow: 0 0 0 2px rgba(0, 123, 255, 0.5)
    }
</style>