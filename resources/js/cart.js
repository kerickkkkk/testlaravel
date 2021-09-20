// function initAddToCart(){
//   const cartNumberDom = document.querySelector('#cartNumber');

//   if(cartNumberDom){
//     const submitBtn = document.querySelector('#cartBtn');

//     if(submitBtn){
//         submitBtn.addEventListener('click',function(){
//             // 當下數量
//             let currentNumber = parseInt(cartNumberDom.value) || 0;
            
//             // 先前的數量
//             let oldNumber = parseInt(Cookies.get('cartNumber')) || 0;

//             //最終數量
//             let finalNumber = currentNumber + oldNumber;
//             Cookies.set('cartNumber', finalNumber);

//             alert(`當下數量 ${currentNumber}，Cookies 內數量 ${oldNumber}，最終數量； ${finalNumber}`)
//         })
//     }
//   }
// }

function setCartQuantity(cart){
  Cookies.set('cart', JSON.stringify(cart));
  console.log('cartNumber' , Cookies.get('cart'));
}

function addProductToCart(productId, quantity){
  const cart = getCart();
  const currentQuantity = parseInt(cart[productId]) || 0;
  const addQuantity = parseInt(quantity) || 0;
  cart[productId] = currentQuantity + addQuantity;
  setCartQuantity(cart);
}

// 取得購物車
function getCart(){
  return Cookies.get('cart') ? JSON.parse(Cookies.get('cart')) :  {};
}

function initCart(){
  getCart()
}


function initAddCart(productId){
  const cartNumberDom = document.querySelector('#cartNumber');

  if(cartNumberDom){
    const submitBtn = document.querySelector('#cartBtn');

    if(submitBtn){
        submitBtn.addEventListener('click',function(){
            initCart();
            // 當下數量
            let currentNumber = parseInt(cartNumberDom.value) || 0;
            addProductToCart(productId, currentNumber)
        })
    }
  }
}



















export { initAddCart };