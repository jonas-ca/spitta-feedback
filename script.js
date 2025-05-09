var input_triggered = false;

document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll(".sync").forEach((item) => {
    let target_id = item.getAttribute("data-target");
    let preview_item = document.getElementById(target_id)

    item.addEventListener("input", () => {
      console.log(item.value);
      preview_item.textContent = item.value

    })
  })
})