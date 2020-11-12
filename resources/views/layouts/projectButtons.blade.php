<div class="media-content">
    <div class="field">
        <div class="control has-text-centered">
            <div class="select is-medium is-info">
                <select id="selected" onchange="myFunction()">
                    <option value="#">Select a project</option>
                    <option disabled>———————</option>
                    <option value="veidus">Veidus</option>
                    <option value="canary">Veidus Canary</option>
                </select>
            </div>
        </div>
    </div>
</div>
<script>
    function myFunction() {
        var x = document.getElementById("selected").value;
        if (x === '#') return;
        window.location = `/projects/${x}`;
    }
</script>