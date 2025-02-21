<?php
class ViewFooter{
    //METHODE
    public function displayView():string{
        ob_start();
?>
    </main>
    <footer>

    </footer>
</body>
</html>
<?php
        $view = ob_get_clean();
        return $view;
    }
}