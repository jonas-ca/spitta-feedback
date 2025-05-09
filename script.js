document.addEventListener("DOMContentLoaded", () => {

  // Sync input fields with live preview
  document.querySelectorAll(".sync").forEach((item) => {
    let target_id = item.getAttribute("data-target");
    let preview_item = document.getElementById(target_id)

    item.addEventListener("input", () => {
      preview_item.textContent = item.value
    })
  })

})