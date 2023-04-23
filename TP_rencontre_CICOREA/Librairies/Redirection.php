<?php
class Redirection {

    public function redirection(string $url): void {

        header("Location: $url");
        exit();
    }
}
?>