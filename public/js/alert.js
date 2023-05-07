const alertPlaceholder = document.getElementById('liveAlertPlaceholder')

export function alertMessage(message, type) {
    const wrapper = document.createElement('div')
    wrapper.innerHTML = [
        `<div class="alert alert-${type} alert-dismissible" role="alert">`,
        `   <div>${message}</div>`,
        '</div>'
    ].join('')

    alertPlaceholder.append(wrapper)
}
// const alert = (message, type) => {
//     const wrapper = document.createElement('div')
//     wrapper.innerHTML = [
//         `<div class="alert alert-${type} alert-dismissible" role="alert">`,
//         `   <div>${message}</div>`,
//         '</div>'
//     ].join('')

//     alertPlaceholder.append(wrapper)
// }