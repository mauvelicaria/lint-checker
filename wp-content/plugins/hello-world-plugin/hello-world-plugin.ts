document.addEventListener("DOMContentLoaded", () => {
  const helloDiv = document.createElement("div");
  const unusedBool = true;
  helloDiv.id = "hello-world";
  helloDiv.innerText = "Hello, World!";
  document.body.appendChild(helloDiv);
});
