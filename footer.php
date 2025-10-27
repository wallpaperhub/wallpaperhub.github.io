<footer>
    <nav>
        <p style="text-align: center">Copyright © <?= date('Y') ?> - Giasuglory.edu.vn, All right reserve.</p>
    </nav>
</footer>
<style>
    .container {
        display: flex;
        flex-wrap: wrap;
    }
    .container > div {
        flex-basis: calc(20% - 1rem);
        padding: 0.5rem;
    }
    @media (max-width: 768px) {
        flex-basis: calc(50% - 1rem);
    }
    .container > div img {
        max-width: 100%;
        height: auto;
    }
    .container > div a {
        display: block;
        text-align: center;
    }
    ul.breadcrumb {
        display: flex;
        list-style: none;
    }
    ul.breadcrumb li {
        margin-right: 10px;
    }
    ul.breadcrumb li:not(:last-child):after {
        content: '>';
    }
    nav {
        background: #d9dfdf;
        padding: 1rem;
    }
    nav ul {
        display: flex;
        list-style: none;
    }
    nav ul li {
        margin-right: 10px;
    }
</style>
</body>
</html>