const signUp = document.getElementById('sign-up'),
    signIn = document.getElementById('sign-in'),
    loginIn = document.getElementById('login-in'),
    loginUp = document.getElementById('login-up')

signUp.addEventListener('click', ()=>{
    // retirer les noms de classes s'ils existent
    loginIn.classList.remove('block')
    loginUp.classList.remove('none')

    //  ajout des noms de classe 
    loginIn.classList.add('none')
    loginUp.classList.add('block')

})

signIn.addEventListener('click', ()=>{
    // retirer les noms de classes s'ils existent
    loginIn.classList.remove('none')
    loginUp.classList.remove('block')

    //  ajout des noms de classe 
    loginIn.classList.add('block')
    loginUp.classList.add('none')

})