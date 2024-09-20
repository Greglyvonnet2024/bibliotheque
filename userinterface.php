<?php session_start();
if (!isset($_SESSION['membres'])) {
    header("Location: http://localhost/bibliotheque/connexion.php");
}
?>

<?php require_once "./inc/header.php"; ?>

<div class="<?= $_SESSION['membres']['genre'] == 'm' ? 'bleu' : 'rose'; ?>">
    <h1>Felicitation <?= $_SESSION['membres']['prenom']; ?></h1>
    <p class="alert alert-success">Tu as trouvé toutes les erreurs</p>
</div>

<?php require_once "./inc/footer.php"; ?>