document.addEventListener("DOMContentLoaded", () => {
    const markdownInput = document.getElementById("markdownInput");
    const preview = document.getElementById("preview");
    const fileUpload = document.getElementById("fileUpload");
    const downloadBtn = document.getElementById("downloadBtn");
    const hiddenInput = document.getElementById("hiddenMarkdownInput");
    const convertForm = document.getElementById("convertForm");
    const themeToggle = document.getElementById("themeToggle");
    const htmlRoot = document.documentElement;

    // --- Theme Management ---
    const saveTheme = (theme) => {
        localStorage.setItem("theme", theme);
        htmlRoot.setAttribute("data-theme", theme);
    };

    const loadTheme = () => {
        const savedTheme = localStorage.getItem("theme") || "light";
        saveTheme(savedTheme);
    };

    themeToggle.addEventListener("click", () => {
        const currentTheme = htmlRoot.getAttribute("data-theme");
        const newTheme = currentTheme === "light" ? "dark" : "light";
        saveTheme(newTheme);
    });

    loadTheme();

    // --- Markdown Logic ---
    const updatePreview = () => {
        const content = markdownInput.value;
        preview.innerHTML = marked.parse(content);
        hiddenInput.value = content;
    };

    markdownInput.addEventListener("input", updatePreview);

    fileUpload.addEventListener("change", (e) => {
        const file = e.target.files[0];
        if (!file) return;

        const reader = new FileReader();
        reader.onload = (e) => {
            markdownInput.value = e.target.result;
            updatePreview();
        };
        reader.readAsText(file);
    });

    downloadBtn.addEventListener("click", () => {
        if (!markdownInput.value.trim()) {
            alert("Please enter some markdown content first!");
            return;
        }
        hiddenInput.value = markdownInput.value;
        convertForm.submit();
    });
});