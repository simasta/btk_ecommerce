<!--
    Copyright (c) Codiad & Andr3as, distributed
    as-is and without warranty under the MIT License. 
    See http://opensource.org/licenses/MIT for more information.
    This information must remain intact.
-->
<form>
    <?php
        switch($_GET['action']) {
            case 'branches':
                include('templates/branch.html');
                break;
            case 'clone':
                include('templates/clone.html');
                break;
            case 'commit':
                include('templates/commit.html');
                break;
            case 'diff':
                include('templates/diff.html');
                break;
            case 'log':
                include('templates/log.html');
                break;
            case 'login':
                include('templates/login.html');
                break;
            case 'newBranch':
                include('templates/newBranch.html');
                break;
            case 'newRemote':
                include('templates/newRemote.html');
                break;
            case 'renameRemote':
                include('templates/renameRemote.html');
                break;
            case 'overview':
                include('templates/overview.html');
                break;
            case 'push':
                include('templates/push.html');
                break;
            case 'remote':
                include('templates/remote.html');
                break;
            case 'settings':
                include('templates/settings.html');
                break;
            default:
                echo "No page defined!";
                break;
        }
    ?>
</form>