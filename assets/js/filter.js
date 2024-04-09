document.addEventListener("DOMContentLoaded", function () {
  const checkboxes = document.querySelectorAll(".filter-checkbox");
  const content = document.getElementById("content");
  const catalogLink = document.getElementById("catalogLink");

  // Função para buscar e exibir todos os produtos
  function fetchAllProducts() {
    // Realiza uma requisição AJAX para recuperar todos os produtos
    fetch("get_all_products.php")
      .then((response) => response.json())
      .then((products) => {
        // Limpa o conteúdo anterior e exibe todos os produtos
        content.innerHTML = "";
        const productContainer = document.createElement("div"); // Cria a div que irá englobar os product-item
        productContainer.classList.add("product-container"); // Adiciona uma classe para a div
        products.forEach((product) => {
          const productItem = document.createElement("div");
          productItem.classList.add("product-item");
          productItem.innerHTML = `
          <div class="cardcontainer">
            <div class="card">
              <img class="tamanho-img" src="./assets/img/${product.product_category}/${product.product_image}" alt="${product.product_name}" width="100">
              <div class="card-body">
                <h3 class="card-title">${product.product_name}</h3>
                <p class="card-value">R$ $${product.product_price}</p>
              </div>
            </div>
          </div>
        `;
          productContainer.appendChild(productItem); // Adiciona o product-item à div externa
        });
        content.appendChild(productContainer); // Adiciona a div externa ao conteúdo principal
      })
      .catch((error) => {
        console.error("Error fetching all products:", error);
      });
  }

  // Função para buscar e exibir os produtos filtrados
  function fetchFilteredProducts() {
    const categories = Array.from(checkboxes)
      .filter((checkbox) => checkbox.checked)
      .map((checkbox) => checkbox.value);

    // Realiza uma requisição AJAX para recuperar os produtos filtrados
    fetch("get_filtered_products.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({ categories }),
    })
      .then((response) => response.json())
      .then((products) => {
        // Limpa o conteúdo anterior e exibe os produtos filtrados
        content.innerHTML = "";
        const productContainer = document.createElement("div"); // Cria a div que irá englobar os product-item
        productContainer.classList.add("product-container"); // Adiciona uma classe para a div
        products.forEach((product) => {
          const productItem = document.createElement("div");
          productItem.classList.add("product-item");
          productItem.innerHTML = `
          <div class="cardcontainer">
                <div class="card">
          <img class="tamanho-img" src="./assets/img/${product.product_category}/${product.product_image}" alt="${product.product_name}" width="100">
          <div class="card-body">
          <h3 class="card-title">${product.product_name}</h3>
          <p class="card-value">R$ $${product.product_price}</p>
          </div>
          </div>
        `;
          productContainer.appendChild(productItem);
        });
        content.appendChild(productContainer);
      })
      .catch((error) => {
        console.error("Error fetching filtered products:", error);
      });
  }

  // Adiciona um evento de clique para atualizar os produtos filtrados quando os checkboxes são clicados
  checkboxes.forEach((checkbox) => {
    checkbox.addEventListener("change", function () {
      if (this.checked) {
        fetchFilteredProducts();
      } else {
        fetchAllProducts();
      }
    });
  });

  catalogLink.addEventListener("click", function (event) {
    event.preventDefault(); // Impede o comportamento padrão do link
    fetchAllProducts(); // Carrega todos os produtos
  });

  // Exibe todos os produtos inicialmente
  fetchAllProducts();
});