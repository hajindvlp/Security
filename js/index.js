document.onload = () => {
  let post_cards = document.getElementsByClassName("post_card");
  post_cards.forEach((post_card, index) => {
    post_card.addEventListener("click", post_card_click);
  })
}

function post_card_click(e) {
  console.log(e);
}