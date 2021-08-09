
<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
include('includes/scripts.php');
    

    $id = $_SESSION["user_id"];

    $query = "SELECT * FROM users where idUser=$id";
    $run = mysqli_query($connection, $query);


?>

<div class="card-body">
    <?php
        if(isset($_SESSION['success']) && $_SESSION['success']!=''){
            echo '<div class="alert alert-success" role="alert">'.$_SESSION['success'].'</div>';
            unset($_SESSION['success']);
        }

        if(isset($_SESSION['status']) && $_SESSION['status']!=''){
            echo '<div class="alert alert-danger" role="alert">'.$_SESSION['status'].'</div>';
            unset($_SESSION['status']);
        }
    ?>


<section class="mt-12 text-gray-800 tracking-widest w-full max-w-6xl mx-auto min-h-screen params">
	<!--<nav class="w-56 flex-none text-gray-800 tracking-widest border-r">
		<div class="h-full flex flex-col gap-2 p-2">
			<div class="py-2 flex flex-col gap-1">
				<a class="flex items-center text-xs rounded tracking-widest bg-yellow-200 px-4 py-2 cursor-pointer hover:bg-yellow-100 transition duration-200 ease-in-out">
					<i class="fas fa-truck text-sm w-8"></i>
					<p class="font-semibold">Distribution</p>
				</a>
				<a class="flex items-center text-xs rounded tracking-widest px-4 py-2 cursor-pointer hover:bg-yellow-100 transition duration-200 ease-in-out">
					<i class="far fa-calendar-check text-sm w-8"></i>
					<p>Event</p>
				</a>
				<a class="flex items-center text-xs rounded tracking-widest px-4 py-2 cursor-pointer hover:bg-yellow-100 transition duration-200 ease-in-out">
					<i class="far fa-images text-sm w-8"></i>
					<p>Gallery</p>
				</a>
			</div>
		</div>
	</nav>-->
	<div class="p-4 flex flex-col md:flex-row md:items-start gap-12" x-data="{tab:'account'}">
		<div class="w-56 text-xs side-bar-params">
			<div class="flex flex-col border rounded overflow-hidden divide-y divide-gray-200">
				<button type="button" class="text-left px-4 py-2 cursor-pointer focus:outline-none tracking-widest transition duration-200m ease-in-out relative" x-bind:class="{'bg-gray-100': tab!=='account'}" x-on:click="tab='account'">
					<span x-bind:class="{'absolute right-0 inset-y-0 w-1 bg-green-500': tab==='account'}"></span>
					Compte
				</button>
				<button type="button" class="text-left px-4 py-2 cursor-pointer focus:outline-none tracking-widest transition duration-200m ease-in-out relative" x-bind:class="{'bg-gray-100': tab!=='security'}" x-on:click="tab='security'">
					<span x-bind:class="{'absolute right-0 inset-y-0 w-1 bg-green-500': tab==='security'}"></span>
					Securité
				</button>
			</div>
		</div>
		<div class="flex-grow max-w-lg">
			<div class="flex flex-col gap-8">
				<!-- PERSONAL -->
				<div class="flex flex-col gap-2" x-show="tab==='account'">
					<h1 class="font-bold text-2xl">Informations</h1>
					<hr class="my-2">
                    <form action="params_actions.php" method="POST">
                        <div class="flex flex-col gap-1">
                            <label class="font-semibold text-xs label-prf">Nom Complet</label>
                            <input type="text" name="name" class="form-control" value="<?=$row[1]?>">
                        </div>
                        <div class="flex flex-col gap-1">
                            <label class="font-semibold text-xs label-prf">Adresse E-mail<span class="text-gray-400" style="font-size:10px">(This email will be use for login)</span></label>
                            <input type="text" name="email" class="form-control" value="<?=$row[2]?>">
                        </div>
                        <div class="flex flex-col gap-1">
                            <label class="font-semibold text-xs label-prf">Numero de télephone</label>
                            <input type="text" name="tel" class="form-control" value="<?=$row[8]?>">
                        </div>
                        <input type="text" name="id" value="<?=$id?>" hidden>
                        <div class="flex justify-end">
                            <button type="submit" name="submit-info" class="bg-blue-500 hover:bg-blue-600 transition duration-200 ease-in-out rounded text-xs px-3 py-2 tracking-widest text-white font-semibold focus:outline-none btn-prof">Enregistrer</button>
                        </div>
                    </form>
				</div>
				<!-- ADDRESS -->
				<div class="flex flex-col gap-2" x-show="tab==='account'">
					<h1 class="font-bold text-2xl">Addresse</h1>
					<hr class="my-2">
                    <form action="params_actions.php" method="POST">
                        <div class="flex flex-col gap-1">
                            <label class="font-semibold text-xs label-prf">Addresse</label>
                            <input type="text" name="adress" class="form-control" value="<?=$row[9]?>">
                        </div>
                        <input type="text" name="id" value="<?=$id?>" hidden>
                        <div class="flex justify-end">
                            <button type="submit" name="submit-adress" class="bg-blue-500 hover:bg-blue-600 transition duration-200 ease-in-out rounded text-xs px-3 py-2 tracking-widest text-white font-semibold focus:outline-none btn-prof">Enregistrer</button>
                        </div>
                    </form>
				</div>
				<!-- PASSWORD -->
				<div class="flex flex-col gap-2" x-show="tab==='security'">
					<h1 class="font-bold text-2xl">Coordonnées</h1>
					<hr class="my-2">
                    <form action="params_actions.php" method="POST">
                        <div class="flex flex-col gap-1">
                            <label class="font-semibold text-xs label-prf">Mot de passe actuel</label>
                            <input id="current" name="old-pass" type="password" class="form-control">
                            <span toggle="#current" class="fa fa-fw fa-eye-slash field-icon toggle-password1"></span>
                        </div>
                        <div class="flex flex-col gap-1">
                            <label class="font-semibold text-xs label-prf">Nouveau mot de passe</label>
                            <input id="pass1" name="new-pass1" type="password" class="form-control">
                            <span toggle="#pass1" class="fa fa-fw fa-eye-slash field-icon toggle-password2"></span>
                        </div>
                        <div class="flex flex-col gap-1 pass-fas">
                            <label class="font-semibold text-xs label-prf">Confirmer le nouveau mot de passe</label>
                            <input id="pass2" name="new-pass2" type="password" class="form-control" />
                            <span toggle="#pass2" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
                        </div>
                        <input type="text" name="id" value="<?=$id?>" hidden>
                        <div class="flex justify-end">
                            <button name="submit-pass" class="bg-blue-500 hover:bg-blue-600 transition duration-200 ease-in-out rounded text-xs px-3 py-2 tracking-widest text-white font-semibold focus:outline-none btn-prof">Enregistrer</button>
                        </div>
                    </form>
				</div>
			</div>
        </div>
	</div>
</section>
</div>

<script>
    $(".toggle-password").click(function() {

    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
    input.attr("type", "text");
    } else {
    input.attr("type", "password");
    }
    });

    $(".toggle-password1").click(function() {

    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
    input.attr("type", "text");
    } else {
    input.attr("type", "password");
    }
    });

    $(".toggle-password2").click(function() {

    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
    input.attr("type", "text");
    } else {
    input.attr("type", "password");
    }
    });
</script>

<?php
include('includes/footer.php');
?>