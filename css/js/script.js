document.addEventListener("DOMContentLoaded", () => {
  console.log("Website Done carregado com sucesso");

  // Idiomas (base)
  const langSelect = document.getElementById("language");

  if (langSelect) {
    langSelect.addEventListener("change", () => {
      alert("Idioma alterado para: " + langSelect.value);
    });
  }

  // Botão exemplo
  const btn = document.getElementById("btnTest");

  if (btn) {
    btn.addEventListener("click", () => {
      alert("JavaScript ativo no Website Done 🚀");
    });
  }
});
