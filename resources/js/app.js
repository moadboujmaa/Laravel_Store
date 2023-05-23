import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const btn = document.getElementById('openMenu');
const menu = document.getElementById('menu')

btn.addEventListener('click', () => {
  menu.classList.toggle('hidden')
})
// window.addEventListener('click', () => {
//   menu.classList.remove('hidden')
// })

function addToCartRequest(user_id, product_id) {
  console.log(user_id)
  let requestData = {
    name: 'John',
    age: 25,
    email: 'john@example.com'
  };

  // Make an AJAX request using Axios
  axios.post(`/store/cart`, requestData)
    .then(function (response) {
      // Handle the successful response
      console.log(response.data);
    })
    .catch(function (error) {
      // Handle the error response
      console.error(error);
    });
}
