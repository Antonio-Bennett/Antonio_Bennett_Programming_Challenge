const body = document.querySelector("body");

const heading = document.createElement("h2");
heading.textContent =
  "Javascript List No styling other than color (Based on JS Logo)";
body.appendChild(heading);

const list = document.createElement("ul");
const colors = ["#ead41c", "#f9ff1e"];
for (let i = 1; i <= 10; i++) {
  const listItem = document.createElement("li");
  listItem.textContent = `Item ${i}`;
  listItem.style.backgroundColor = colors[i % 2];
  list.appendChild(listItem);
}
body.appendChild(list);
