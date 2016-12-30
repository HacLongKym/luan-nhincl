<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'AdminController' => $baseDir . '/app/controllers/AdminController.php',
    'ApiController' => $baseDir . '/app/controllers/ApiController.php',
    'BaseController' => $baseDir . '/app/controllers/BaseController.php',
    'BaseFacebook' => $vendorDir . '/facebook/php-sdk/src/base_facebook.php',
    'CategoriesController' => $baseDir . '/app/controllers/CategoriesController.php',
    'CategoriesTableSeeder' => $baseDir . '/app/database/seeds/CategoriesTableSeeder.php',
    'Category' => $baseDir . '/app/models/Category.php',
    'Comment' => $baseDir . '/app/models/Comment.php',
    'CommentFlag' => $baseDir . '/app/models/CommentFlag.php',
    'CommentFlagsTableSeeder' => $baseDir . '/app/database/seeds/CommentFlagsTableSeeder.php',
    'CommentVote' => $baseDir . '/app/models/CommentVote.php',
    'CommentVotesTableSeeder' => $baseDir . '/app/database/seeds/CommentVotesTableSeeder.php',
    'Comment_flagsTableSeeder' => $baseDir . '/app/database/seeds/Comment_flagsTableSeeder.php',
    'Comment_votesTableSeeder' => $baseDir . '/app/database/seeds/Comment_votesTableSeeder.php',
    'CommentsController' => $baseDir . '/app/controllers/CommentsController.php',
    'CommentsTableSeeder' => $baseDir . '/app/database/seeds/CommentsTableSeeder.php',
    'CreateCategoriesTable' => $baseDir . '/app/database/migrations/2013_10_18_004537_create_categories_table.php',
    'CreateCommentFlagsTable' => $baseDir . '/app/database/migrations/2013_10_31_190916_create_comment_flags_table.php',
    'CreateCommentVotesTable' => $baseDir . '/app/database/migrations/2013_10_31_164630_create_comment_votes_table.php',
    'CreateCommentsTable' => $baseDir . '/app/database/migrations/2013_10_22_214617_create_comments_table.php',
    'CreateMediaFlagsTable' => $baseDir . '/app/database/migrations/2013_10_31_205327_create_media_flags_table.php',
    'CreateMediaLikesTable' => $baseDir . '/app/database/migrations/2013_11_01_172137_create_media_likes_table.php',
    'CreateMediaTable' => $baseDir . '/app/database/migrations/2013_10_17_201039_create_media_table.php',
    'CreateOauthFacebookTable' => $baseDir . '/app/database/migrations/2013_11_06_225242_create_oauth_facebook_table.php',
    'CreateOauthGoogleTable' => $baseDir . '/app/database/migrations/2013_11_07_153547_create_oauth_google_table.php',
    'CreatePasswordRemindersTable' => $baseDir . '/app/database/migrations/2014_01_26_191701_create_password_reminders_table.php',
    'CreatePointsTable' => $baseDir . '/app/database/migrations/2013_10_22_214727_create_points_table.php',
    'CreateSettingsTable' => $baseDir . '/app/database/migrations/2013_11_24_012351_create_settings_table.php',
    'CreateUserFlagsTable' => $baseDir . '/app/database/migrations/2013_10_31_205302_create_user_flags_table.php',
    'CreateUsersTable' => $baseDir . '/app/database/migrations/2013_09_02_062359_create_users_table.php',
    'DatabaseSeeder' => $baseDir . '/app/database/seeds/DatabaseSeeder.php',
    'Facebook' => $vendorDir . '/facebook/php-sdk/src/facebook.php',
    'FacebookApiException' => $vendorDir . '/facebook/php-sdk/src/base_facebook.php',
    'GamesTableSeeder' => $baseDir . '/app/database/seeds/GamesTableSeeder.php',
    'Helper' => $baseDir . '/app/libraries/helper.php',
    'HomeController' => $baseDir . '/app/controllers/HomeController.php',
    'IlluminateQueueClosure' => $vendorDir . '/laravel/framework/src/Illuminate/Queue/IlluminateQueueClosure.php',
    'ImageHandler' => $baseDir . '/app/libraries/ImageHandler.php',
    'InstallController' => $baseDir . '/app/controllers/InstallController.php',
    'Media' => $baseDir . '/app/models/Media.php',
    'MediaController' => $baseDir . '/app/controllers/MediaController.php',
    'MediaFlag' => $baseDir . '/app/models/MediaFlag.php',
    'MediaFlagsTableSeeder' => $baseDir . '/app/database/seeds/MediaFlagsTableSeeder.php',
    'MediaLike' => $baseDir . '/app/models/MediaLike.php',
    'MediaLikesTableSeeder' => $baseDir . '/app/database/seeds/MediaLikesTableSeeder.php',
    'MediaTableSeeder' => $baseDir . '/app/database/seeds/MediaTableSeeder.php',
    'Media_flagsTableSeeder' => $baseDir . '/app/database/seeds/Media_flagsTableSeeder.php',
    'Media_likesTableSeeder' => $baseDir . '/app/database/seeds/Media_likesTableSeeder.php',
    'Nmsconfig' => $baseDir . '/app/libraries/Nmsconfig.php',
    'OauthFacebook' => $baseDir . '/app/models/OauthFacebook.php',
    'OauthFacebookTableSeeder' => $baseDir . '/app/database/seeds/OauthFacebookTableSeeder.php',
    'OauthGoogle' => $baseDir . '/app/models/OauthGoogle.php',
    'OauthGoogleTableSeeder' => $baseDir . '/app/database/seeds/OauthGoogleTableSeeder.php',
    'Oauth_facebookTableSeeder' => $baseDir . '/app/database/seeds/Oauth_facebookTableSeeder.php',
    'Oauth_googleTableSeeder' => $baseDir . '/app/database/seeds/Oauth_googleTableSeeder.php',
    'Page' => $baseDir . '/app/models/Page.php',
    'Plugin' => $baseDir . '/app/models/Plugin.php',
    'PluginData' => $baseDir . '/app/models/PluginData.php',
    'Plugins' => $baseDir . '/app/libraries/Plugins.php',
    'Point' => $baseDir . '/app/models/Point.php',
    'PointsTableSeeder' => $baseDir . '/app/database/seeds/PointsTableSeeder.php',
    'ReCaptchaResponse' => $baseDir . '/app/libraries/Recaptcha.php',
    'Recaptcha' => $baseDir . '/app/libraries/Recaptcha.php',
    'SessionHandlerInterface' => $vendorDir . '/symfony/http-foundation/Symfony/Component/HttpFoundation/Resources/stubs/SessionHandlerInterface.php',
    'Setting' => $baseDir . '/app/models/Setting.php',
    'SettingsTableSeeder' => $baseDir . '/app/database/seeds/SettingsTableSeeder.php',
    'Site' => $baseDir . '/app/libraries/Site.php',
    'SitemapController' => $baseDir . '/app/controllers/SitemapController.php',
    'Symfony\\Component\\HttpFoundation\\Resources\\stubs\\FakeFile' => $vendorDir . '/symfony/http-foundation/Symfony/Component/HttpFoundation/Resources/stubs/FakeFile.php',
    'TestCase' => $baseDir . '/app/tests/TestCase.php',
    'User' => $baseDir . '/app/models/User.php',
    'UserController' => $baseDir . '/app/controllers/UserController.php',
    'UserFlag' => $baseDir . '/app/models/UserFlag.php',
    'UserFlagsTableSeeder' => $baseDir . '/app/database/seeds/UserFlagsTableSeeder.php',
    'User_flagsTableSeeder' => $baseDir . '/app/database/seeds/User_flagsTableSeeder.php',
    'UsersTableSeeder' => $baseDir . '/app/database/seeds/UsersTableSeeder.php',
    'Youtubehelper' => $baseDir . '/app/libraries/Youtubehelper.php',
);
