const dgebi = (id) => {
    const selectedelement = document.getElementById(id);
    return selectedelement;
}

showSignInDiv = () => {
    const siDiv = dgebi('signInInputDiv');
    const suDiv = dgebi('signUpInputDiv');
    siDiv.classList.toggle('d-none');
    suDiv.classList.toggle('d-none');
}
showSignUpDiv = () => {
    const siDiv = dgebi('signInInputDiv');
    const suDiv = dgebi('signUpInputDiv');
    siDiv.classList.toggle('d-none');
    suDiv.classList.toggle('d-none');
}