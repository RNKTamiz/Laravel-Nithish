<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo e(url('/import')); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <input type="file" name="file">
        <input type="submit" value="Import Data">
    </form>
</body>
</html>
<?php /**PATH D:\Laravel\excel\resources\views/importexportview.blade.php ENDPATH**/ ?>