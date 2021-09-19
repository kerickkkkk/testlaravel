function initAddCart(){
  const cartNumberDom = document.querySelector('#cartNumber');

  if(cartNumberDom){
    const submitBtn = document.querySelector('#cartBtn');

    if(submitBtn){
        submitBtn.addEventListener('click',function(){
            // 當下數量
            let currentNumber = parseInt(cartNumberDom.value) || 0;
            
            // 先前的數量
            let oldNumber = parseInt(Cookies.get('cartNumber')) || 0;

            //最終數量
            let finalNumber = currentNumber + oldNumber;
            Cookies.set('cartNumber', finalNumber);

            alert(`當下數量 ${currentNumber}，Cookies 內數量 ${oldNumber}，最終數量； ${finalNumber}`)
        })
    }
  }
}

export { initAddCart };