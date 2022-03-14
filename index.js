const phpList = document.querySelector("ul");

const heading = document.createElement("h2");
heading.textContent =
  "Javascript List No styling other than color (Based on JS Logo)";
phpList.parentNode.insertBefore(heading, phpList.nextSibling);

const list = document.createElement("ul");
const colors = ["#ead41c", "#f9ff1e"];
for (let i = 1; i <= 10; i++) {
  const listItem = document.createElement("li");
  listItem.textContent = `Item ${i}`;
  listItem.style.backgroundColor = colors[i % 2];
  list.appendChild(listItem);
}
heading.parentNode.insertBefore(list, heading.nextSibling);
