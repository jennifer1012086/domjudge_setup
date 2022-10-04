<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/jury/analysis' => [[['_route' => 'analysis_index', '_controller' => 'App\\Controller\\Jury\\AnalysisController::indexAction'], null, null, null, false, false, null]],
        '/jury/auditlog' => [[['_route' => 'jury_auditlog', '_controller' => 'App\\Controller\\Jury\\AuditLogController::indexAction'], null, null, null, false, false, null]],
        '/jury/balloons' => [[['_route' => 'jury_balloons', '_controller' => 'App\\Controller\\Jury\\BalloonController::indexAction'], null, null, null, false, false, null]],
        '/jury/clarifications' => [[['_route' => 'jury_clarifications', '_controller' => 'App\\Controller\\Jury\\ClarificationController::indexAction'], null, null, null, false, false, null]],
        '/jury/clarifications/send' => [
            [['_route' => 'jury_clarification_new', '_controller' => 'App\\Controller\\Jury\\ClarificationController::composeClarificationAction'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'jury_clarification_send', '_controller' => 'App\\Controller\\Jury\\ClarificationController::sendAction'], null, ['POST' => 0], null, false, false, null],
        ],
        '/jury/config' => [[['_route' => 'jury_config', '_controller' => 'App\\Controller\\Jury\\ConfigController::indexAction'], null, null, null, false, false, null]],
        '/jury/config/check' => [[['_route' => 'jury_config_check', '_controller' => 'App\\Controller\\Jury\\ConfigController::checkAction'], null, null, null, false, false, null]],
        '/jury/config/check/phpinfo' => [[['_route' => 'jury_config_phpinfo', '_controller' => 'App\\Controller\\Jury\\ConfigController::phpinfoAction'], null, null, null, false, false, null]],
        '/jury/contests' => [[['_route' => 'jury_contests', '_controller' => 'App\\Controller\\Jury\\ContestController::indexAction'], null, null, null, false, false, null]],
        '/jury/contests/add' => [[['_route' => 'jury_contest_add', '_controller' => 'App\\Controller\\Jury\\ContestController::addAction'], null, null, null, false, false, null]],
        '/jury/executables' => [[['_route' => 'jury_executables', '_controller' => 'App\\Controller\\Jury\\ExecutableController::indexAction'], null, null, null, false, false, null]],
        '/jury/executables/add' => [[['_route' => 'jury_executable_add', '_controller' => 'App\\Controller\\Jury\\ExecutableController::addAction'], null, null, null, false, false, null]],
        '/jury/external-contest-sources' => [[['_route' => 'jury_external_contest_sources', '_controller' => 'App\\Controller\\Jury\\ExternalContestSourceController::indexAction'], null, null, null, true, false, null]],
        '/jury/external-contest-sources/add' => [[['_route' => 'jury_external_contest_source_add', '_controller' => 'App\\Controller\\Jury\\ExternalContestSourceController::addAction'], null, null, null, false, false, null]],
        '/jury/import-export' => [[['_route' => 'jury_import_export', '_controller' => 'App\\Controller\\Jury\\ImportExportController::indexAction'], null, null, null, false, false, null]],
        '/jury/internal-errors' => [[['_route' => 'jury_internal_errors', '_controller' => 'App\\Controller\\Jury\\InternalErrorController::indexAction'], null, null, null, false, false, null]],
        '/jury/judgehosts' => [[['_route' => 'jury_judgehosts', '_controller' => 'App\\Controller\\Jury\\JudgehostController::indexAction'], null, null, null, false, false, null]],
        '/jury/judgehosts/edit/multiple' => [[['_route' => 'jury_judgehost_edit', '_controller' => 'App\\Controller\\Jury\\JudgehostController::editMultipleAction'], null, null, null, false, false, null]],
        '/jury' => [[['_route' => 'jury_index', '_controller' => 'App\\Controller\\Jury\\JuryMiscController::indexAction'], null, null, null, false, false, null]],
        '/jury/updates' => [[['_route' => 'jury_ajax_updates', '_controller' => 'App\\Controller\\Jury\\JuryMiscController::updatesAction'], null, ['GET' => 0], null, false, false, null]],
        '/jury/refresh-cache' => [[['_route' => 'jury_refresh_cache', '_controller' => 'App\\Controller\\Jury\\JuryMiscController::refreshCacheAction'], null, null, null, false, false, null]],
        '/jury/judging-verifier' => [[['_route' => 'jury_judging_verifier', '_controller' => 'App\\Controller\\Jury\\JuryMiscController::judgingVerifierAction'], null, null, null, false, false, null]],
        '/jury/languages' => [[['_route' => 'jury_languages', '_controller' => 'App\\Controller\\Jury\\LanguageController::indexAction'], null, null, null, false, false, null]],
        '/jury/languages/add' => [[['_route' => 'jury_language_add', '_controller' => 'App\\Controller\\Jury\\LanguageController::addAction'], null, null, null, false, false, null]],
        '/jury/print' => [[['_route' => 'jury_print', '_controller' => 'App\\Controller\\Jury\\PrintController::showAction'], null, null, null, false, false, null]],
        '/jury/problems' => [[['_route' => 'jury_problems', '_controller' => 'App\\Controller\\Jury\\ProblemController::indexAction'], null, null, null, false, false, null]],
        '/jury/problems/add' => [[['_route' => 'jury_problem_add', '_controller' => 'App\\Controller\\Jury\\ProblemController::addAction'], null, null, null, false, false, null]],
        '/jury/queuetasks' => [[['_route' => 'jury_queue_tasks', '_controller' => 'App\\Controller\\Jury\\QueueTaskController::indexAction'], null, null, null, false, false, null]],
        '/jury/rejudgings' => [[['_route' => 'jury_rejudgings', '_controller' => 'App\\Controller\\Jury\\RejudgingController::indexAction'], null, null, null, false, false, null]],
        '/jury/rejudgings/add' => [[['_route' => 'jury_rejudging_add', '_controller' => 'App\\Controller\\Jury\\RejudgingController::addAction'], null, null, null, false, false, null]],
        '/jury/rejudgings/create' => [[['_route' => 'jury_create_rejudge', '_controller' => 'App\\Controller\\Jury\\RejudgingController::createAction'], null, ['POST' => 0], null, false, false, null]],
        '/jury/scoreboard' => [[['_route' => 'jury_scoreboard', '_controller' => 'App\\Controller\\Jury\\ScoreboardController::scoreboardAction'], null, null, null, false, false, null]],
        '/jury/shadow-differences' => [[['_route' => 'jury_shadow_differences', '_controller' => 'App\\Controller\\Jury\\ShadowDifferencesController::indexAction'], null, null, null, false, false, null]],
        '/jury/submissions' => [[['_route' => 'jury_submissions', '_controller' => 'App\\Controller\\Jury\\SubmissionController::indexAction'], null, null, null, false, false, null]],
        '/jury/affiliations' => [[['_route' => 'jury_team_affiliations', '_controller' => 'App\\Controller\\Jury\\TeamAffiliationController::indexAction'], null, null, null, false, false, null]],
        '/jury/affiliations/add' => [[['_route' => 'jury_team_affiliation_add', '_controller' => 'App\\Controller\\Jury\\TeamAffiliationController::addAction'], null, null, null, false, false, null]],
        '/jury/categories' => [[['_route' => 'jury_team_categories', '_controller' => 'App\\Controller\\Jury\\TeamCategoryController::indexAction'], null, null, null, false, false, null]],
        '/jury/categories/add' => [[['_route' => 'jury_team_category_add', '_controller' => 'App\\Controller\\Jury\\TeamCategoryController::addAction'], null, null, null, false, false, null]],
        '/jury/teams' => [[['_route' => 'jury_teams', '_controller' => 'App\\Controller\\Jury\\TeamController::indexAction'], null, null, null, false, false, null]],
        '/jury/teams/add' => [[['_route' => 'jury_team_add', '_controller' => 'App\\Controller\\Jury\\TeamController::addAction'], null, null, null, false, false, null]],
        '/jury/users' => [[['_route' => 'jury_users', '_controller' => 'App\\Controller\\Jury\\UserController::indexAction'], null, null, null, false, false, null]],
        '/jury/users/add' => [[['_route' => 'jury_user_add', '_controller' => 'App\\Controller\\Jury\\UserController::addAction'], null, null, null, false, false, null]],
        '/jury/users/generate-passwords' => [[['_route' => 'jury_generate_passwords', '_controller' => 'App\\Controller\\Jury\\UserController::generatePasswordsAction'], null, null, null, false, false, null]],
        '/public' => [[['_route' => 'public_index', '_controller' => 'App\\Controller\\PublicController::scoreboardAction'], null, null, null, false, false, null]],
        '/public/problems' => [[['_route' => 'public_problems', '_controller' => 'App\\Controller\\PublicController::problemsAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'root', '_controller' => 'App\\Controller\\RootController::redirectAction'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::loginAction'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\SecurityController::registerAction'], null, null, null, false, false, null]],
        '/team/clarifications/add' => [[['_route' => 'team_clarification_add', '_controller' => 'App\\Controller\\Team\\ClarificationController::addAction'], null, null, null, false, false, null]],
        '/team' => [[['_route' => 'team_index', '_controller' => 'App\\Controller\\Team\\MiscController::homeAction'], null, null, null, false, false, null]],
        '/team/print' => [[['_route' => 'team_print', '_controller' => 'App\\Controller\\Team\\MiscController::printAction'], null, null, null, false, false, null]],
        '/team/docs' => [[['_route' => 'team_docs', '_controller' => 'App\\Controller\\Team\\MiscController::docsAction'], null, null, null, false, false, null]],
        '/team/problems' => [[['_route' => 'team_problems', '_controller' => 'App\\Controller\\Team\\ProblemController::problemsAction'], null, null, null, false, false, null]],
        '/team/scoreboard' => [[['_route' => 'team_scoreboard', '_controller' => 'App\\Controller\\Team\\ScoreboardController::scoreboardAction'], null, null, null, false, false, null]],
        '/api/v4/contests' => [
            [['_route' => 'v4_app_api_contest_addcontest', '_controller' => 'App\\Controller\\API\\ContestController::addContestAction', '_format' => 'json'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'v4_app_api_contest_list', '_controller' => 'App\\Controller\\API\\ContestController::listAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/v4/version' => [[['_route' => 'v4_app_api_generalinfo_getversion', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getVersionAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null]],
        '/api/v4/info' => [[['_route' => 'v4_app_api_generalinfo_getinfo', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getInfoAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null]],
        '/api/v4' => [[['_route' => 'v4_api_root', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getInfoAction', '_format' => 'json'], null, ['GET' => 0], null, true, false, null]],
        '/api/v4/status' => [[['_route' => 'v4_app_api_generalinfo_getstatus', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getStatusAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null]],
        '/api/v4/user' => [[['_route' => 'v4_app_api_generalinfo_getuser', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getUserAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null]],
        '/api/v4/config' => [
            [['_route' => 'v4_app_api_generalinfo_getdatabaseconfiguration', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getDatabaseConfigurationAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'v4_app_api_generalinfo_updateconfiguration', '_controller' => 'App\\Controller\\API\\GeneralInfoController::updateConfigurationAction', '_format' => 'json'], null, ['PUT' => 0], null, false, false, null],
        ],
        '/api/v4/config/check' => [[['_route' => 'v4_app_api_generalinfo_getconfigcheck', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getConfigCheckAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null]],
        '/api/v4/problems' => [[['_route' => 'v4_app_api_generalinfo_addproblem', '_controller' => 'App\\Controller\\API\\GeneralInfoController::addProblemAction', '_format' => 'json'], null, ['POST' => 0], null, false, false, null]],
        '/api/v4/judgehosts' => [
            [['_route' => 'v4_app_api_judgehost_getjudgehosts', '_controller' => 'App\\Controller\\API\\JudgehostController::getJudgehostsAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'v4_app_api_judgehost_createjudgehost', '_controller' => 'App\\Controller\\API\\JudgehostController::createJudgehostAction', '_format' => 'json'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/v4/metrics/prometheus' => [[['_route' => 'v4_app_api_metrics_prometheus', '_controller' => 'App\\Controller\\API\\MetricsController::prometheusAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null]],
        '/api/v4/users/groups' => [[['_route' => 'v4_app_api_user_addgroups', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::addGroupsAction'], null, ['POST' => 0], null, false, false, null]],
        '/api/v4/users/organizations' => [[['_route' => 'v4_app_api_user_addorganizations', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::addOrganizationsAction'], null, ['POST' => 0], null, false, false, null]],
        '/api/v4/users/teams' => [[['_route' => 'v4_app_api_user_addteams', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::addTeamsAction'], null, ['POST' => 0], null, false, false, null]],
        '/api/v4/users/accounts' => [[['_route' => 'v4_app_api_user_addaccounts', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::addAccountsAction'], null, ['POST' => 0], null, false, false, null]],
        '/api/v4/users' => [
            [['_route' => 'v4_app_api_user_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::listAction'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'v4_app_api_user_add', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::addAction'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/contests' => [
            [['_route' => 'current_app_api_contest_addcontest', '_controller' => 'App\\Controller\\API\\ContestController::addContestAction', '_format' => 'json'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'current_app_api_contest_list', '_controller' => 'App\\Controller\\API\\ContestController::listAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/version' => [[['_route' => 'current_app_api_generalinfo_getversion', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getVersionAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null]],
        '/api/info' => [[['_route' => 'current_app_api_generalinfo_getinfo', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getInfoAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null]],
        '/api' => [[['_route' => 'current_api_root', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getInfoAction', '_format' => 'json'], null, ['GET' => 0], null, true, false, null]],
        '/api/status' => [[['_route' => 'current_app_api_generalinfo_getstatus', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getStatusAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null]],
        '/api/user' => [[['_route' => 'current_app_api_generalinfo_getuser', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getUserAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null]],
        '/api/config' => [
            [['_route' => 'current_app_api_generalinfo_getdatabaseconfiguration', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getDatabaseConfigurationAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'current_app_api_generalinfo_updateconfiguration', '_controller' => 'App\\Controller\\API\\GeneralInfoController::updateConfigurationAction', '_format' => 'json'], null, ['PUT' => 0], null, false, false, null],
        ],
        '/api/config/check' => [[['_route' => 'current_app_api_generalinfo_getconfigcheck', '_controller' => 'App\\Controller\\API\\GeneralInfoController::getConfigCheckAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null]],
        '/api/problems' => [[['_route' => 'current_app_api_generalinfo_addproblem', '_controller' => 'App\\Controller\\API\\GeneralInfoController::addProblemAction', '_format' => 'json'], null, ['POST' => 0], null, false, false, null]],
        '/api/judgehosts' => [
            [['_route' => 'current_app_api_judgehost_getjudgehosts', '_controller' => 'App\\Controller\\API\\JudgehostController::getJudgehostsAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'current_app_api_judgehost_createjudgehost', '_controller' => 'App\\Controller\\API\\JudgehostController::createJudgehostAction', '_format' => 'json'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/metrics/prometheus' => [[['_route' => 'current_app_api_metrics_prometheus', '_controller' => 'App\\Controller\\API\\MetricsController::prometheusAction', '_format' => 'json'], null, ['GET' => 0], null, false, false, null]],
        '/api/users/groups' => [[['_route' => 'current_app_api_user_addgroups', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::addGroupsAction'], null, ['POST' => 0], null, false, false, null]],
        '/api/users/organizations' => [[['_route' => 'current_app_api_user_addorganizations', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::addOrganizationsAction'], null, ['POST' => 0], null, false, false, null]],
        '/api/users/teams' => [[['_route' => 'current_app_api_user_addteams', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::addTeamsAction'], null, ['POST' => 0], null, false, false, null]],
        '/api/users/accounts' => [[['_route' => 'current_app_api_user_addaccounts', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::addAccountsAction'], null, ['POST' => 0], null, false, false, null]],
        '/api/users' => [
            [['_route' => 'current_app_api_user_list', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::listAction'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'current_app_api_user_add', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::addAction'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/doc.json' => [[['_route' => 'app.swagger', '_controller' => 'nelmio_api_doc.controller.swagger'], null, ['GET' => 0], null, false, false, null]],
        '/api/doc' => [[['_route' => 'app.swagger_ui', '_controller' => 'nelmio_api_doc.controller.swagger_ui'], null, ['GET' => 0], null, false, false, null]],
        '/logout' => [[['_route' => 'logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/jury/(?'
                    .'|a(?'
                        .'|nalysis/(?'
                            .'|team/([^/]++)(*:44)'
                            .'|problem/([^/]++)(*:67)'
                        .')'
                        .'|jax/([^/]++)(*:87)'
                        .'|ffiliations/(?'
                            .'|(\\d+)(*:114)'
                            .'|(\\d+)/edit(*:132)'
                            .'|(\\d+)/delete(*:152)'
                        .')'
                    .')'
                    .'|balloons/([^/]++)/done(*:184)'
                    .'|c(?'
                        .'|larifications/(?'
                            .'|(\\d+)(*:218)'
                            .'|(\\d+)/claim(*:237)'
                            .'|(\\d+)/set\\-answered(*:264)'
                            .'|(\\d+)/change\\-subject(*:293)'
                            .'|(\\d+)/change\\-queue(*:320)'
                        .')'
                        .'|ontests/(?'
                            .'|(\\d+)(*:345)'
                            .'|(\\d+)/remove\\-interval/([^/]++)(*:384)'
                            .'|(\\d+)/edit(*:402)'
                            .'|(\\d+)/delete(*:422)'
                            .'|(\\d+)/problems/(\\d+)/delete(*:457)'
                            .'|(\\d+)/prefetch(*:479)'
                            .'|(\\d+)/finalize(*:501)'
                            .'|(\\d+)/request\\-remaining(*:533)'
                            .'|(\\d+)/problems/(\\d+)/request\\-remaining(*:580)'
                        .')'
                        .'|hange\\-contest/(-?\\d+)(*:611)'
                        .'|ategories/(?'
                            .'|(\\d+)(*:637)'
                            .'|(\\d+)/edit(*:655)'
                            .'|(\\d+)/delete(*:675)'
                            .'|(\\d+)/request\\-remaining(*:707)'
                        .')'
                    .')'
                    .'|ex(?'
                        .'|ecutables/([^/]++)(?'
                            .'|(*:743)'
                            .'|/(?'
                                .'|d(?'
                                    .'|ownload(?'
                                        .'|(*:769)'
                                        .'|/([^/]++)(*:786)'
                                    .')'
                                    .'|elete(?'
                                        .'|/([^/]++)(*:812)'
                                        .'|(*:820)'
                                    .')'
                                .')'
                                .'|edit(?'
                                    .'|(*:837)'
                                    .'|\\-files(*:852)'
                                .')'
                            .')'
                        .')'
                        .'|ternal\\-contest\\-sources/(?'
                            .'|(\\d+)(*:896)'
                            .'|(\\d+)/edit(*:914)'
                            .'|(\\d+)/delete(*:934)'
                            .'|(\\d+)/enable(*:954)'
                            .'|(\\d+)/disable(*:975)'
                        .')'
                    .')'
                    .'|i(?'
                        .'|mport\\-export/export/(?'
                            .'|(groups|teams|results)\\.tsv(*:1040)'
                            .'|(results|clarifications)\\.html(*:1079)'
                        .')'
                        .'|nternal\\-errors/(?'
                            .'|(\\d+)(*:1113)'
                            .'|(\\d+)/(ignore|resolve)(*:1144)'
                        .')'
                    .')'
                    .'|judgehosts/(?'
                        .'|([^/]++)(?'
                            .'|(*:1180)'
                            .'|/(?'
                                .'|d(?'
                                    .'|elete(*:1202)'
                                    .'|isable(*:1217)'
                                .')'
                                .'|enable(*:1233)'
                            .')'
                        .')'
                        .'|enable\\-all(*:1255)'
                        .'|disable\\-all(*:1276)'
                        .'|autohide(*:1293)'
                    .')'
                    .'|languages/([^/]++)(?'
                        .'|(*:1324)'
                        .'|/(?'
                            .'|toggle\\-(?'
                                .'|submit(*:1354)'
                                .'|judge(*:1368)'
                            .')'
                            .'|edit(*:1382)'
                            .'|delete(*:1397)'
                            .'|request\\-remaining(*:1424)'
                        .')'
                    .')'
                    .'|problems/(?'
                        .'|(\\d+)/export(*:1459)'
                        .'|(\\d+)(*:1473)'
                        .'|(\\d+)/text(*:1492)'
                        .'|(\\d+)/testcases(*:1516)'
                        .'|(\\d+)/testcases/(\\d+)/move/(up|down)(*:1561)'
                        .'|(\\d+)/testcases/(\\d+)/fetch/(input|output|image)(*:1618)'
                        .'|(\\d+)/edit(*:1637)'
                        .'|(\\d+)/delete(*:1658)'
                        .'|attachments/(?'
                            .'|(\\d+)(*:1687)'
                            .'|(\\d+)/delete(*:1708)'
                        .')'
                        .'|(\\d+)/delete_testcase(*:1739)'
                        .'|(\\d+)/request\\-remaining(*:1772)'
                    .')'
                    .'|queuetasks/([^/]++)/(?'
                        .'|change\\-priority/([^/]++)(*:1830)'
                        .'|judgetasks(*:1849)'
                    .')'
                    .'|rejudgings/(?'
                        .'|(\\d+)(*:1878)'
                        .'|(\\d+)/(cancel|apply)(*:1907)'
                    .')'
                    .'|submissions/(?'
                        .'|(\\d+)(*:1937)'
                        .'|request\\-(?'
                            .'|full\\-debug/([^/]++)(*:1978)'
                            .'|output/([^/]++)/([^/]++)(*:2011)'
                        .')'
                        .'|download\\-full\\-debug/([^/]++)(*:2051)'
                        .'|by\\-(?'
                            .'|judging\\-id/([^/]++)(*:2087)'
                            .'|external\\-(?'
                                .'|judgement\\-id/([^/]++)(*:2131)'
                                .'|id/([^/]++)(*:2151)'
                            .')'
                        .')'
                        .'|([^/]++)/(?'
                            .'|runs/([^/]++)/([^/]++)/team\\-output(*:2209)'
                            .'|source(*:2224)'
                            .'|edit\\-source(*:2245)'
                        .')'
                        .'|(\\d+)/request\\-remaining(*:2279)'
                        .'|(\\d+)/update\\-status(*:2308)'
                        .'|(\\d+)/verify(*:2329)'
                        .'|shadow\\-difference/(\\d+)/verify(*:2369)'
                    .')'
                    .'|teams/(?'
                        .'|(\\d+)(*:2393)'
                        .'|(\\d+)/edit(*:2412)'
                        .'|(\\d+)/delete(*:2433)'
                    .')'
                    .'|users/(?'
                        .'|(\\d+)(*:2457)'
                        .'|(\\d+)/edit(*:2476)'
                        .'|(\\d+)/delete(*:2497)'
                    .')'
                .')'
                .'|/public/(?'
                    .'|change\\-contest/(-?\\d+)(*:2542)'
                    .'|team/(\\d+)(*:2561)'
                    .'|problems/(\\d+)/text(*:2589)'
                    .'|(\\d+)/attachment/(\\d+)(*:2620)'
                    .'|(\\d+)/samples\\.zip(*:2647)'
                .')'
                .'|/team/(?'
                    .'|c(?'
                        .'|larifications/(\\d+)(*:2689)'
                        .'|hange\\-contest/(-?\\d+)(*:2720)'
                    .')'
                    .'|problems/(\\d+)/text(*:2749)'
                    .'|(\\d+)/attachment/(\\d+)(*:2780)'
                    .'|(\\d+)/samples\\.zip(*:2807)'
                    .'|team/(\\d+)(*:2826)'
                    .'|submi(?'
                        .'|t(?:/([^/]++))?(*:2858)'
                        .'|ssion/(?'
                            .'|(\\d+)(*:2881)'
                            .'|(\\d+)/download(*:2904)'
                        .')'
                    .')'
                .')'
                .'|/api/(?'
                    .'|v4/(?'
                        .'|co(?'
                            .'|ntests/([^/]++)(?'
                                .'|/(?'
                                    .'|a(?'
                                        .'|ccount(?'
                                            .'|s(?'
                                                .'|(*:2974)'
                                                .'|/([^/]++)(*:2992)'
                                            .')'
                                            .'|(*:3002)'
                                        .')'
                                        .'|wards(?'
                                            .'|(*:3020)'
                                            .'|/([^/]++)(*:3038)'
                                        .')'
                                    .')'
                                    .'|ba(?'
                                        .'|lloons(?'
                                            .'|(*:3063)'
                                            .'|/([^/]++)/done(*:3086)'
                                        .')'
                                        .'|nner(?'
                                            .'|(*:3103)'
                                        .')'
                                    .')'
                                    .'|c(?'
                                        .'|larifications(?'
                                            .'|(*:3134)'
                                            .'|/([^/]++)(?'
                                                .'|(*:3155)'
                                            .')'
                                            .'|(*:3165)'
                                            .'|(*:3174)'
                                        .')'
                                        .'|ontest\\-yaml(*:3196)'
                                    .')'
                                    .'|s(?'
                                        .'|tat(?'
                                            .'|e(*:3217)'
                                            .'|us(*:3228)'
                                        .')'
                                        .'|coreboard(*:3247)'
                                        .'|ubmissions(?'
                                            .'|(*:3269)'
                                            .'|/([^/]++)(?'
                                                .'|(*:3290)'
                                                .'|/(?'
                                                    .'|files(*:3308)'
                                                    .'|source\\-code(*:3329)'
                                                .')'
                                            .')'
                                            .'|(*:3340)'
                                            .'|(*:3349)'
                                        .')'
                                    .')'
                                    .'|event\\-feed(*:3371)'
                                    .'|groups(?'
                                        .'|(*:3389)'
                                        .'|/([^/]++)(*:3407)'
                                        .'|(*:3416)'
                                    .')'
                                    .'|judgement(?'
                                        .'|s(?'
                                            .'|(*:3442)'
                                            .'|/([^/]++)(*:3460)'
                                        .')'
                                        .'|\\-types(?'
                                            .'|(*:3480)'
                                            .'|/([^/]++)(*:3498)'
                                        .')'
                                    .')'
                                    .'|languages(?'
                                        .'|(*:3521)'
                                        .'|/([^/]++)(*:3539)'
                                    .')'
                                    .'|organizations(?'
                                        .'|(*:3565)'
                                        .'|/([^/]++)(?'
                                            .'|(*:3586)'
                                            .'|/logo(?'
                                                .'|(*:3603)'
                                            .')'
                                        .')'
                                        .'|(*:3614)'
                                    .')'
                                    .'|problems(?'
                                        .'|/(?'
                                            .'|add\\-data(*:3648)'
                                            .'|([^/]++)(?'
                                                .'|(*:3668)'
                                            .')'
                                        .')'
                                        .'|(*:3679)'
                                    .')'
                                    .'|runs(?'
                                        .'|(*:3696)'
                                        .'|/([^/]++)(*:3714)'
                                    .')'
                                    .'|teams(?'
                                        .'|(*:3732)'
                                        .'|/([^/]++)(?'
                                            .'|(*:3753)'
                                            .'|/photo(?'
                                                .'|(*:3771)'
                                            .')'
                                        .')'
                                        .'|(*:3782)'
                                    .')'
                                .')'
                                .'|(*:3793)'
                            .')'
                            .'|untry\\-flags/([^/]++)/([^/]++)(*:3833)'
                        .')'
                        .'|executables/([^/]++)(*:3863)'
                        .'|judgehosts/(?'
                            .'|([^/]++)(*:3894)'
                            .'|update\\-judging/([^/]++)/([^/]++)(*:3936)'
                            .'|add\\-(?'
                                .'|debug\\-info/([^/]++)/([^/]++)(*:3982)'
                                .'|judging\\-run/([^/]++)/([^/]++)(*:4021)'
                            .')'
                            .'|internal\\-error(*:4046)'
                            .'|get_files/([^/]++)/([^/]++)(*:4082)'
                            .'|fetch\\-work(*:4102)'
                        .')'
                        .'|users/([^/]++)(*:4126)'
                    .')'
                    .'|co(?'
                        .'|ntests/([^/]++)(?'
                            .'|/(?'
                                .'|a(?'
                                    .'|ccount(?'
                                        .'|s(?'
                                            .'|(*:4180)'
                                            .'|/([^/]++)(*:4198)'
                                        .')'
                                        .'|(*:4208)'
                                    .')'
                                    .'|wards(?'
                                        .'|(*:4226)'
                                        .'|/([^/]++)(*:4244)'
                                    .')'
                                .')'
                                .'|ba(?'
                                    .'|lloons(?'
                                        .'|(*:4269)'
                                        .'|/([^/]++)/done(*:4292)'
                                    .')'
                                    .'|nner(?'
                                        .'|(*:4309)'
                                    .')'
                                .')'
                                .'|c(?'
                                    .'|larifications(?'
                                        .'|(*:4340)'
                                        .'|/([^/]++)(?'
                                            .'|(*:4361)'
                                        .')'
                                        .'|(*:4371)'
                                        .'|(*:4380)'
                                    .')'
                                    .'|ontest\\-yaml(*:4402)'
                                .')'
                                .'|s(?'
                                    .'|tat(?'
                                        .'|e(*:4423)'
                                        .'|us(*:4434)'
                                    .')'
                                    .'|coreboard(*:4453)'
                                    .'|ubmissions(?'
                                        .'|(*:4475)'
                                        .'|/([^/]++)(?'
                                            .'|(*:4496)'
                                            .'|/(?'
                                                .'|files(*:4514)'
                                                .'|source\\-code(*:4535)'
                                            .')'
                                        .')'
                                        .'|(*:4546)'
                                        .'|(*:4555)'
                                    .')'
                                .')'
                                .'|event\\-feed(*:4577)'
                                .'|groups(?'
                                    .'|(*:4595)'
                                    .'|/([^/]++)(*:4613)'
                                    .'|(*:4622)'
                                .')'
                                .'|judgement(?'
                                    .'|s(?'
                                        .'|(*:4648)'
                                        .'|/([^/]++)(*:4666)'
                                    .')'
                                    .'|\\-types(?'
                                        .'|(*:4686)'
                                        .'|/([^/]++)(*:4704)'
                                    .')'
                                .')'
                                .'|languages(?'
                                    .'|(*:4727)'
                                    .'|/([^/]++)(*:4745)'
                                .')'
                                .'|organizations(?'
                                    .'|(*:4771)'
                                    .'|/([^/]++)(?'
                                        .'|(*:4792)'
                                        .'|/logo(?'
                                            .'|(*:4809)'
                                        .')'
                                    .')'
                                    .'|(*:4820)'
                                .')'
                                .'|problems(?'
                                    .'|/(?'
                                        .'|add\\-data(*:4854)'
                                        .'|([^/]++)(?'
                                            .'|(*:4874)'
                                        .')'
                                    .')'
                                    .'|(*:4885)'
                                .')'
                                .'|runs(?'
                                    .'|(*:4902)'
                                    .'|/([^/]++)(*:4920)'
                                .')'
                                .'|teams(?'
                                    .'|(*:4938)'
                                    .'|/([^/]++)(?'
                                        .'|(*:4959)'
                                        .'|/photo(?'
                                            .'|(*:4977)'
                                        .')'
                                    .')'
                                    .'|(*:4988)'
                                .')'
                            .')'
                            .'|(*:4999)'
                        .')'
                        .'|untry\\-flags/([^/]++)/([^/]++)(*:5039)'
                    .')'
                    .'|executables/([^/]++)(*:5069)'
                    .'|judgehosts/(?'
                        .'|([^/]++)(*:5100)'
                        .'|update\\-judging/([^/]++)/([^/]++)(*:5142)'
                        .'|add\\-(?'
                            .'|debug\\-info/([^/]++)/([^/]++)(*:5188)'
                            .'|judging\\-run/([^/]++)/([^/]++)(*:5227)'
                        .')'
                        .'|internal\\-error(*:5252)'
                        .'|get_files/([^/]++)/([^/]++)(*:5288)'
                        .'|fetch\\-work(*:5308)'
                    .')'
                    .'|users/([^/]++)(*:5332)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        44 => [[['_route' => 'analysis_team', '_controller' => 'App\\Controller\\Jury\\AnalysisController::teamAction'], ['teamid'], null, null, false, true, null]],
        67 => [[['_route' => 'analysis_problem', '_controller' => 'App\\Controller\\Jury\\AnalysisController::problemAction'], ['probid'], null, null, false, true, null]],
        87 => [[['_route' => 'jury_ajax_data', '_controller' => 'App\\Controller\\Jury\\JuryMiscController::ajaxDataAction'], ['datatype'], ['GET' => 0], null, false, true, null]],
        114 => [[['_route' => 'jury_team_affiliation', '_controller' => 'App\\Controller\\Jury\\TeamAffiliationController::viewAction'], ['affilId'], null, null, false, true, null]],
        132 => [[['_route' => 'jury_team_affiliation_edit', '_controller' => 'App\\Controller\\Jury\\TeamAffiliationController::editAction'], ['affilId'], null, null, false, false, null]],
        152 => [[['_route' => 'jury_team_affiliation_delete', '_controller' => 'App\\Controller\\Jury\\TeamAffiliationController::deleteAction'], ['affilId'], null, null, false, false, null]],
        184 => [[['_route' => 'jury_balloons_setdone', '_controller' => 'App\\Controller\\Jury\\BalloonController::setDoneAction'], ['balloonId'], null, null, false, false, null]],
        218 => [[['_route' => 'jury_clarification', '_controller' => 'App\\Controller\\Jury\\ClarificationController::viewAction'], ['id'], null, null, false, true, null]],
        237 => [[['_route' => 'jury_clarification_claim', '_controller' => 'App\\Controller\\Jury\\ClarificationController::toggleClaimAction'], ['clarId'], null, null, false, false, null]],
        264 => [[['_route' => 'jury_clarification_set_answered', '_controller' => 'App\\Controller\\Jury\\ClarificationController::toggleAnsweredAction'], ['clarId'], null, null, false, false, null]],
        293 => [[['_route' => 'jury_clarification_change_subject', '_controller' => 'App\\Controller\\Jury\\ClarificationController::changeSubjectAction'], ['clarId'], null, null, false, false, null]],
        320 => [[['_route' => 'jury_clarification_change_queue', '_controller' => 'App\\Controller\\Jury\\ClarificationController::changeQueueAction'], ['clarId'], null, null, false, false, null]],
        345 => [[['_route' => 'jury_contest', '_controller' => 'App\\Controller\\Jury\\ContestController::viewAction'], ['contestId'], null, null, false, true, null]],
        384 => [[['_route' => 'jury_contest_remove_interval', '_controller' => 'App\\Controller\\Jury\\ContestController::removeIntervalAction'], ['contestId', 'intervalId'], ['POST' => 0], null, false, true, null]],
        402 => [[['_route' => 'jury_contest_edit', '_controller' => 'App\\Controller\\Jury\\ContestController::editAction'], ['contestId'], null, null, false, false, null]],
        422 => [[['_route' => 'jury_contest_delete', '_controller' => 'App\\Controller\\Jury\\ContestController::deleteAction'], ['contestId'], null, null, false, false, null]],
        457 => [[['_route' => 'jury_contest_problem_delete', '_controller' => 'App\\Controller\\Jury\\ContestController::deleteProblemAction'], ['contestId', 'probId'], null, null, false, false, null]],
        479 => [[['_route' => 'jury_contest_prefetch', '_controller' => 'App\\Controller\\Jury\\ContestController::prefetchAction'], ['contestId'], null, null, false, false, null]],
        501 => [[['_route' => 'jury_contest_finalize', '_controller' => 'App\\Controller\\Jury\\ContestController::finalizeAction'], ['contestId'], null, null, false, false, null]],
        533 => [[['_route' => 'jury_contest_request_remaining', '_controller' => 'App\\Controller\\Jury\\ContestController::requestRemainingRunsWholeContestAction'], ['contestId'], null, null, false, false, null]],
        580 => [[['_route' => 'jury_contest_problem_request_remaining', '_controller' => 'App\\Controller\\Jury\\ContestController::requestRemainingRunsContestProblemAction'], ['contestId', 'probId'], null, null, false, false, null]],
        611 => [[['_route' => 'jury_change_contest', '_controller' => 'App\\Controller\\Jury\\JuryMiscController::changeContestAction'], ['contestId'], null, null, false, true, null]],
        637 => [[['_route' => 'jury_team_category', '_controller' => 'App\\Controller\\Jury\\TeamCategoryController::viewAction'], ['categoryId'], null, null, false, true, null]],
        655 => [[['_route' => 'jury_team_category_edit', '_controller' => 'App\\Controller\\Jury\\TeamCategoryController::editAction'], ['categoryId'], null, null, false, false, null]],
        675 => [[['_route' => 'jury_team_category_delete', '_controller' => 'App\\Controller\\Jury\\TeamCategoryController::deleteAction'], ['categoryId'], null, null, false, false, null]],
        707 => [[['_route' => 'jury_team_category_request_remaining', '_controller' => 'App\\Controller\\Jury\\TeamCategoryController::requestRemainingRunsWholeTeamCategoryAction'], ['categoryId'], null, null, false, false, null]],
        743 => [[['_route' => 'jury_executable', '_controller' => 'App\\Controller\\Jury\\ExecutableController::viewAction'], ['execId'], null, null, false, true, null]],
        769 => [[['_route' => 'jury_executable_download', '_controller' => 'App\\Controller\\Jury\\ExecutableController::downloadAction'], ['execId'], null, null, false, false, null]],
        786 => [[['_route' => 'jury_executable_download_single', '_controller' => 'App\\Controller\\Jury\\ExecutableController::downloadSingleAction'], ['execId', 'rank'], null, null, false, true, null]],
        812 => [[['_route' => 'jury_executable_delete_single', '_controller' => 'App\\Controller\\Jury\\ExecutableController::deleteSingleAction'], ['execId', 'rank'], null, null, false, true, null]],
        820 => [[['_route' => 'jury_executable_delete', '_controller' => 'App\\Controller\\Jury\\ExecutableController::deleteAction'], ['execId'], null, null, false, false, null]],
        837 => [[['_route' => 'jury_executable_edit', '_controller' => 'App\\Controller\\Jury\\ExecutableController::editAction'], ['execId'], null, null, false, false, null]],
        852 => [[['_route' => 'jury_executable_edit_files', '_controller' => 'App\\Controller\\Jury\\ExecutableController::editFilesAction'], ['execId'], null, null, false, false, null]],
        896 => [[['_route' => 'jury_external_contest_source', '_controller' => 'App\\Controller\\Jury\\ExternalContestSourceController::viewAction'], ['extsourceid'], ['GET' => 0], null, false, true, null]],
        914 => [[['_route' => 'jury_external_contest_source_edit', '_controller' => 'App\\Controller\\Jury\\ExternalContestSourceController::editAction'], ['extsourceid'], null, null, false, false, null]],
        934 => [[['_route' => 'jury_external_contest_source_delete', '_controller' => 'App\\Controller\\Jury\\ExternalContestSourceController::deleteAction'], ['extsourceid'], null, null, false, false, null]],
        954 => [[['_route' => 'jury_external_contest_source_enable', '_controller' => 'App\\Controller\\Jury\\ExternalContestSourceController::enableAction'], ['extsourceid'], null, null, false, false, null]],
        975 => [[['_route' => 'jury_external_contest_source_disable', '_controller' => 'App\\Controller\\Jury\\ExternalContestSourceController::disableAction'], ['extsourceid'], null, null, false, false, null]],
        1040 => [[['_route' => 'jury_tsv_export', '_controller' => 'App\\Controller\\Jury\\ImportExportController::exportTsvAction'], ['type'], null, null, false, false, null]],
        1079 => [[['_route' => 'jury_html_export', '_controller' => 'App\\Controller\\Jury\\ImportExportController::exportHtmlAction'], ['type'], null, null, false, false, null]],
        1113 => [[['_route' => 'jury_internal_error', '_controller' => 'App\\Controller\\Jury\\InternalErrorController::viewAction'], ['errorId'], ['GET' => 0], null, false, true, null]],
        1144 => [[['_route' => 'jury_internal_error_handle', '_controller' => 'App\\Controller\\Jury\\InternalErrorController::handleAction'], ['errorId', 'action'], ['POST' => 0], null, false, true, null]],
        1180 => [[['_route' => 'jury_judgehost', '_controller' => 'App\\Controller\\Jury\\JudgehostController::viewAction'], ['judgehostid'], ['GET' => 0], null, false, true, null]],
        1202 => [[['_route' => 'jury_judgehost_delete', '_controller' => 'App\\Controller\\Jury\\JudgehostController::deleteAction'], ['judgehostid'], null, null, false, false, null]],
        1217 => [[['_route' => 'jury_judgehost_disable', '_controller' => 'App\\Controller\\Jury\\JudgehostController::disableAction'], ['judgehostid'], null, null, false, false, null]],
        1233 => [[['_route' => 'jury_judgehost_enable', '_controller' => 'App\\Controller\\Jury\\JudgehostController::enableAction'], ['judgehostid'], null, null, false, false, null]],
        1255 => [[['_route' => 'jury_judgehost_enable_all', '_controller' => 'App\\Controller\\Jury\\JudgehostController::enableAllAction'], [], ['POST' => 0], null, false, false, null]],
        1276 => [[['_route' => 'jury_judgehost_disable_all', '_controller' => 'App\\Controller\\Jury\\JudgehostController::disableAllAction'], [], ['POST' => 0], null, false, false, null]],
        1293 => [[['_route' => 'jury_judgehost_autohide', '_controller' => 'App\\Controller\\Jury\\JudgehostController::autohideInactive'], [], ['POST' => 0], null, false, false, null]],
        1324 => [[['_route' => 'jury_language', '_controller' => 'App\\Controller\\Jury\\LanguageController::viewAction'], ['langId'], null, null, false, true, null]],
        1354 => [[['_route' => 'jury_language_toggle_submit', '_controller' => 'App\\Controller\\Jury\\LanguageController::toggleSubmitAction'], ['langId'], null, null, false, false, null]],
        1368 => [[['_route' => 'jury_language_toggle_judge', '_controller' => 'App\\Controller\\Jury\\LanguageController::toggleJudgeAction'], ['langId'], null, null, false, false, null]],
        1382 => [[['_route' => 'jury_language_edit', '_controller' => 'App\\Controller\\Jury\\LanguageController::editAction'], ['langId'], null, null, false, false, null]],
        1397 => [[['_route' => 'jury_language_delete', '_controller' => 'App\\Controller\\Jury\\LanguageController::deleteAction'], ['langId'], null, null, false, false, null]],
        1424 => [[['_route' => 'jury_language_request_remaining', '_controller' => 'App\\Controller\\Jury\\LanguageController::requestRemainingRunsWholeLanguageAction'], ['langId'], null, null, false, false, null]],
        1459 => [[['_route' => 'jury_export_problem', '_controller' => 'App\\Controller\\Jury\\ProblemController::exportAction'], ['problemId'], null, null, false, false, null]],
        1473 => [[['_route' => 'jury_problem', '_controller' => 'App\\Controller\\Jury\\ProblemController::viewAction'], ['probId'], null, null, false, true, null]],
        1492 => [[['_route' => 'jury_problem_text', '_controller' => 'App\\Controller\\Jury\\ProblemController::viewTextAction'], ['probId'], null, null, false, false, null]],
        1516 => [[['_route' => 'jury_problem_testcases', '_controller' => 'App\\Controller\\Jury\\ProblemController::testcasesAction'], ['probId'], null, null, false, false, null]],
        1561 => [[['_route' => 'jury_problem_testcase_move', '_controller' => 'App\\Controller\\Jury\\ProblemController::moveTestcaseAction'], ['probId', 'rank', 'direction'], null, null, false, true, null]],
        1618 => [[['_route' => 'jury_problem_testcase_fetch', '_controller' => 'App\\Controller\\Jury\\ProblemController::fetchTestcaseAction'], ['probId', 'rank', 'type'], null, null, false, true, null]],
        1637 => [[['_route' => 'jury_problem_edit', '_controller' => 'App\\Controller\\Jury\\ProblemController::editAction'], ['probId'], null, null, false, false, null]],
        1658 => [[['_route' => 'jury_problem_delete', '_controller' => 'App\\Controller\\Jury\\ProblemController::deleteAction'], ['probId'], null, null, false, false, null]],
        1687 => [[['_route' => 'jury_attachment_fetch', '_controller' => 'App\\Controller\\Jury\\ProblemController::fetchAttachmentAction'], ['attachmentId'], null, null, false, true, null]],
        1708 => [[['_route' => 'jury_attachment_delete', '_controller' => 'App\\Controller\\Jury\\ProblemController::deleteAttachmentAction'], ['attachmentId'], null, null, false, false, null]],
        1739 => [[['_route' => 'jury_testcase_delete', '_controller' => 'App\\Controller\\Jury\\ProblemController::deleteTestcaseAction'], ['testcaseId'], null, null, false, false, null]],
        1772 => [[['_route' => 'jury_problem_request_remaining', '_controller' => 'App\\Controller\\Jury\\ProblemController::requestRemainingRunsWholeProblemAction'], ['probId'], null, null, false, false, null]],
        1830 => [[['_route' => 'jury_queue_task_change_priority', '_controller' => 'App\\Controller\\Jury\\QueueTaskController::changePriorityAction'], ['queueTaskId', 'priority'], null, null, false, true, null]],
        1849 => [[['_route' => 'jury_queue_task_judge_tasks', '_controller' => 'App\\Controller\\Jury\\QueueTaskController::viewJudgeTasksAction'], ['queueTaskId'], null, null, false, false, null]],
        1878 => [[['_route' => 'jury_rejudging', '_controller' => 'App\\Controller\\Jury\\RejudgingController::viewAction'], ['rejudgingId'], null, null, false, true, null]],
        1907 => [[['_route' => 'jury_rejudging_finish', '_controller' => 'App\\Controller\\Jury\\RejudgingController::finishAction'], ['rejudgingId', 'action'], null, null, false, true, null]],
        1937 => [[['_route' => 'jury_submission', '_controller' => 'App\\Controller\\Jury\\SubmissionController::viewAction'], ['submitId'], null, null, false, true, null]],
        1978 => [[['_route' => 'request_full_debug', '_controller' => 'App\\Controller\\Jury\\SubmissionController::requestFullDebug'], ['jid'], null, null, false, true, null]],
        2011 => [[['_route' => 'request_output', '_controller' => 'App\\Controller\\Jury\\SubmissionController::requestOutput'], ['jid', 'jrid'], null, null, false, true, null]],
        2051 => [[['_route' => 'download_full_debug', '_controller' => 'App\\Controller\\Jury\\SubmissionController::downloadFullDebug'], ['debug_package_id'], null, null, false, true, null]],
        2087 => [[['_route' => 'jury_submission_by_judging', '_controller' => 'App\\Controller\\Jury\\SubmissionController::viewForJudgingAction'], ['jid'], null, null, false, true, null]],
        2131 => [[['_route' => 'jury_submission_by_external_judgement', '_controller' => 'App\\Controller\\Jury\\SubmissionController::viewForExternalJudgementAction'], ['externalJudgement'], null, null, false, true, null]],
        2151 => [[['_route' => 'jury_submission_by_external_id', '_controller' => 'App\\Controller\\Jury\\SubmissionController::viewForExternalIdAction'], ['externalId'], null, null, false, true, null]],
        2209 => [[['_route' => 'jury_submission_team_output', '_controller' => 'App\\Controller\\Jury\\SubmissionController::teamOutputAction'], ['submission', 'contest', 'run'], null, null, false, false, null]],
        2224 => [[['_route' => 'jury_submission_source', '_controller' => 'App\\Controller\\Jury\\SubmissionController::sourceAction'], ['submission'], null, null, false, false, null]],
        2245 => [[['_route' => 'jury_submission_edit_source', '_controller' => 'App\\Controller\\Jury\\SubmissionController::editSourceAction'], ['submission'], null, null, false, false, null]],
        2279 => [[['_route' => 'jury_submission_request_remaining', '_controller' => 'App\\Controller\\Jury\\SubmissionController::requestRemainingRuns'], ['judgingId'], ['POST' => 0], null, false, false, null]],
        2308 => [[['_route' => 'jury_submission_update_status', '_controller' => 'App\\Controller\\Jury\\SubmissionController::updateStatusAction'], ['submitId'], ['POST' => 0], null, false, false, null]],
        2329 => [[['_route' => 'jury_judging_verify', '_controller' => 'App\\Controller\\Jury\\SubmissionController::verifyAction'], ['judgingId'], ['POST' => 0], null, false, false, null]],
        2369 => [[['_route' => 'jury_shadow_difference_verify', '_controller' => 'App\\Controller\\Jury\\SubmissionController::verifyShadowDifferenceAction'], ['extjudgementid'], ['POST' => 0], null, false, false, null]],
        2393 => [[['_route' => 'jury_team', '_controller' => 'App\\Controller\\Jury\\TeamController::viewAction'], ['teamId'], null, null, false, true, null]],
        2412 => [[['_route' => 'jury_team_edit', '_controller' => 'App\\Controller\\Jury\\TeamController::editAction'], ['teamId'], null, null, false, false, null]],
        2433 => [[['_route' => 'jury_team_delete', '_controller' => 'App\\Controller\\Jury\\TeamController::deleteAction'], ['teamId'], null, null, false, false, null]],
        2457 => [[['_route' => 'jury_user', '_controller' => 'App\\Controller\\Jury\\UserController::viewAction'], ['userId'], null, null, false, true, null]],
        2476 => [[['_route' => 'jury_user_edit', '_controller' => 'App\\Controller\\Jury\\UserController::editAction'], ['userId'], null, null, false, false, null]],
        2497 => [[['_route' => 'jury_user_delete', '_controller' => 'App\\Controller\\Jury\\UserController::deleteAction'], ['userId'], null, null, false, false, null]],
        2542 => [[['_route' => 'public_change_contest', '_controller' => 'App\\Controller\\PublicController::changeContestAction'], ['contestId'], null, null, false, true, null]],
        2561 => [[['_route' => 'public_team', '_controller' => 'App\\Controller\\PublicController::teamAction'], ['teamId'], null, null, false, true, null]],
        2589 => [[['_route' => 'public_problem_text', '_controller' => 'App\\Controller\\PublicController::problemTextAction'], ['probId'], null, null, false, false, null]],
        2620 => [[['_route' => 'public_problem_attachment', '_controller' => 'App\\Controller\\PublicController::attachmentAction'], ['probId', 'attachmentId'], null, null, false, true, null]],
        2647 => [[['_route' => 'public_problem_sample_zip', '_controller' => 'App\\Controller\\PublicController::sampleZipAction'], ['probId'], null, null, false, false, null]],
        2689 => [[['_route' => 'team_clarification', '_controller' => 'App\\Controller\\Team\\ClarificationController::viewAction'], ['clarId'], null, null, false, true, null]],
        2720 => [[['_route' => 'team_change_contest', '_controller' => 'App\\Controller\\Team\\MiscController::changeContestAction'], ['contestId'], null, null, false, true, null]],
        2749 => [[['_route' => 'team_problem_text', '_controller' => 'App\\Controller\\Team\\ProblemController::problemTextAction'], ['probId'], null, null, false, false, null]],
        2780 => [[['_route' => 'team_problem_attachment', '_controller' => 'App\\Controller\\Team\\ProblemController::attachmentAction'], ['probId', 'attachmentId'], null, null, false, true, null]],
        2807 => [[['_route' => 'team_problem_sample_zip', '_controller' => 'App\\Controller\\Team\\ProblemController::sampleZipAction'], ['probId'], null, null, false, false, null]],
        2826 => [[['_route' => 'team_team', '_controller' => 'App\\Controller\\Team\\ScoreboardController::teamAction'], ['teamId'], null, null, false, true, null]],
        2858 => [[['_route' => 'team_submit', 'problem' => null, '_controller' => 'App\\Controller\\Team\\SubmissionController::createAction'], ['problem'], null, null, false, true, null]],
        2881 => [[['_route' => 'team_submission', '_controller' => 'App\\Controller\\Team\\SubmissionController::viewAction'], ['submitId'], null, null, false, true, null]],
        2904 => [[['_route' => 'team_submission_download', '_controller' => 'App\\Controller\\Team\\SubmissionController::downloadAction'], ['submitId'], null, null, false, false, null]],
        2974 => [[['_route' => 'v4_app_api_account_list', '_controller' => 'App\\Controller\\API\\AccountController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        2992 => [[['_route' => 'v4_app_api_account_single', '_controller' => 'App\\Controller\\API\\AccountController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        3002 => [[['_route' => 'v4_app_api_account_getcurrent', '_controller' => 'App\\Controller\\API\\AccountController::getCurrentAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        3020 => [[['_route' => 'v4_app_api_awards_list', '_controller' => 'App\\Controller\\API\\AwardsController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        3038 => [[['_route' => 'v4_app_api_awards_single', '_controller' => 'App\\Controller\\API\\AwardsController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        3063 => [[['_route' => 'v4_app_api_balloon_list', '_controller' => 'App\\Controller\\API\\BalloonController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        3086 => [[['_route' => 'v4_app_api_balloon_markdone', '_controller' => 'App\\Controller\\API\\BalloonController::markDoneAction', '_format' => 'json'], ['cid', 'balloonId'], ['POST' => 0], null, false, false, null]],
        3103 => [
            [['_route' => 'v4_contest_banner', '_controller' => 'App\\Controller\\API\\ContestController::bannerAction', '_format' => 'json'], ['id'], ['GET' => 0], null, false, false, null],
            [['_route' => 'v4_delete_contest_banner', '_controller' => 'App\\Controller\\API\\ContestController::deleteBannerAction', '_format' => 'json'], ['id'], ['DELETE' => 0], null, false, false, null],
            [['_route' => 'v4_post_contest_banner', '_controller' => 'App\\Controller\\API\\ContestController::setBannerAction', '_format' => 'json'], ['id'], ['POST' => 0], null, false, false, null],
            [['_route' => 'v4_put_contest_banner', '_controller' => 'App\\Controller\\API\\ContestController::setBannerAction', '_format' => 'json'], ['id'], ['PUT' => 0], null, false, false, null],
        ],
        3134 => [[['_route' => 'v4_app_api_clarification_list', '_controller' => 'App\\Controller\\API\\ClarificationController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        3155 => [
            [['_route' => 'v4_app_api_clarification_single', '_controller' => 'App\\Controller\\API\\ClarificationController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'v4_app_api_clarification_add_2', '_controller' => 'App\\Controller\\API\\ClarificationController::addAction', '_format' => 'json'], ['cid', 'id'], ['PUT' => 0], null, false, true, null],
        ],
        3165 => [[['_route' => 'v4_app_api_clarification_add', '_controller' => 'App\\Controller\\API\\ClarificationController::addAction', '_format' => 'json'], ['cid'], ['POST' => 0], null, false, false, null]],
        3174 => [[['_route' => 'v4_app_api_clarification_add_1', '_controller' => 'App\\Controller\\API\\ClarificationController::addAction', '_format' => 'json'], ['cid'], ['POST' => 0], null, true, false, null]],
        3196 => [[['_route' => 'v4_app_api_contest_getcontestyaml', '_controller' => 'App\\Controller\\API\\ContestController::getContestYamlAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        3217 => [[['_route' => 'v4_app_api_contest_getconteststate', '_controller' => 'App\\Controller\\API\\ContestController::getContestStateAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        3228 => [[['_route' => 'v4_app_api_contest_getstatus', '_controller' => 'App\\Controller\\API\\ContestController::getStatusAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        3247 => [[['_route' => 'v4_app_api_scoreboard_getscoreboard', '_controller' => 'App\\Controller\\API\\ScoreboardController::getScoreboardAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        3269 => [[['_route' => 'v4_app_api_submission_list', '_controller' => 'App\\Controller\\API\\SubmissionController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        3290 => [
            [['_route' => 'v4_app_api_submission_single', '_controller' => 'App\\Controller\\API\\SubmissionController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'v4_app_api_submission_addsubmission_2', '_controller' => 'App\\Controller\\API\\SubmissionController::addSubmissionAction', '_format' => 'json'], ['cid', 'id'], ['PUT' => 0], null, false, true, null],
        ],
        3308 => [[['_route' => 'v4_submission_files', '_controller' => 'App\\Controller\\API\\SubmissionController::getSubmissionFilesAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, false, null]],
        3329 => [[['_route' => 'v4_app_api_submission_getsubmissionsourcecode', '_controller' => 'App\\Controller\\API\\SubmissionController::getSubmissionSourceCodeAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, false, null]],
        3340 => [[['_route' => 'v4_app_api_submission_addsubmission', '_controller' => 'App\\Controller\\API\\SubmissionController::addSubmissionAction', '_format' => 'json'], ['cid'], ['POST' => 0], null, false, false, null]],
        3349 => [[['_route' => 'v4_app_api_submission_addsubmission_1', '_controller' => 'App\\Controller\\API\\SubmissionController::addSubmissionAction', '_format' => 'json'], ['cid'], ['POST' => 0], null, true, false, null]],
        3371 => [[['_route' => 'v4_app_api_contest_geteventfeed', '_controller' => 'App\\Controller\\API\\ContestController::getEventFeedAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        3389 => [[['_route' => 'v4_app_api_group_list', '_controller' => 'App\\Controller\\API\\GroupController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        3407 => [[['_route' => 'v4_app_api_group_single', '_controller' => 'App\\Controller\\API\\GroupController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        3416 => [[['_route' => 'v4_app_api_group_add', '_controller' => 'App\\Controller\\API\\GroupController::addAction', '_format' => 'json'], ['cid'], ['POST' => 0], null, false, false, null]],
        3442 => [[['_route' => 'v4_app_api_judgement_list', '_controller' => 'App\\Controller\\API\\JudgementController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        3460 => [[['_route' => 'v4_app_api_judgement_single', '_controller' => 'App\\Controller\\API\\JudgementController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        3480 => [[['_route' => 'v4_app_api_judgementtype_list', '_controller' => 'App\\Controller\\API\\JudgementTypeController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        3498 => [[['_route' => 'v4_app_api_judgementtype_single', '_controller' => 'App\\Controller\\API\\JudgementTypeController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        3521 => [[['_route' => 'v4_app_api_language_list', '_controller' => 'App\\Controller\\API\\LanguageController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        3539 => [[['_route' => 'v4_app_api_language_single', '_controller' => 'App\\Controller\\API\\LanguageController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        3565 => [[['_route' => 'v4_app_api_organization_list', '_controller' => 'App\\Controller\\API\\OrganizationController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        3586 => [[['_route' => 'v4_app_api_organization_single', '_controller' => 'App\\Controller\\API\\OrganizationController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        3603 => [
            [['_route' => 'v4_organization_logo', '_controller' => 'App\\Controller\\API\\OrganizationController::logoAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, false, null],
            [['_route' => 'v4_delete_organization_logo', '_controller' => 'App\\Controller\\API\\OrganizationController::deleteLogoAction', '_format' => 'json'], ['cid', 'id'], ['DELETE' => 0], null, false, false, null],
            [['_route' => 'v4_post_organization_logo', '_controller' => 'App\\Controller\\API\\OrganizationController::setLogoAction', '_format' => 'json'], ['cid', 'id'], ['POST' => 0], null, false, false, null],
            [['_route' => 'v4_put_organization_logo', '_controller' => 'App\\Controller\\API\\OrganizationController::setLogoAction', '_format' => 'json'], ['cid', 'id'], ['PUT' => 0], null, false, false, null],
        ],
        3614 => [[['_route' => 'v4_app_api_organization_add', '_controller' => 'App\\Controller\\API\\OrganizationController::addAction', '_format' => 'json'], ['cid'], ['POST' => 0], null, false, false, null]],
        3648 => [[['_route' => 'v4_app_api_problem_addproblems', '_controller' => 'App\\Controller\\API\\ProblemController::addProblemsAction', '_format' => 'json'], ['cid'], ['POST' => 0], null, false, false, null]],
        3668 => [
            [['_route' => 'v4_app_api_problem_unlinkproblem', '_controller' => 'App\\Controller\\API\\ProblemController::unlinkProblemAction', '_format' => 'json'], ['cid', 'id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'v4_app_api_problem_linkproblem', '_controller' => 'App\\Controller\\API\\ProblemController::linkProblemAction', '_format' => 'json'], ['cid', 'id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'v4_app_api_problem_single', '_controller' => 'App\\Controller\\API\\ProblemController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null],
        ],
        3679 => [
            [['_route' => 'v4_app_api_problem_list', '_controller' => 'App\\Controller\\API\\ProblemController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null],
            [['_route' => 'v4_app_api_problem_addproblem', '_controller' => 'App\\Controller\\API\\ProblemController::addProblemAction', '_format' => 'json'], ['cid'], ['POST' => 0], null, false, false, null],
        ],
        3696 => [[['_route' => 'v4_app_api_run_list', '_controller' => 'App\\Controller\\API\\RunController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        3714 => [[['_route' => 'v4_app_api_run_single', '_controller' => 'App\\Controller\\API\\RunController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        3732 => [[['_route' => 'v4_app_api_team_list', '_controller' => 'App\\Controller\\API\\TeamController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        3753 => [[['_route' => 'v4_app_api_team_single', '_controller' => 'App\\Controller\\API\\TeamController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        3771 => [
            [['_route' => 'v4_team_photo', '_controller' => 'App\\Controller\\API\\TeamController::photoAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, false, null],
            [['_route' => 'v4_delete_team_photo', '_controller' => 'App\\Controller\\API\\TeamController::deletePhotoAction', '_format' => 'json'], ['cid', 'id'], ['DELETE' => 0], null, false, false, null],
            [['_route' => 'v4_post_team_photo', '_controller' => 'App\\Controller\\API\\TeamController::setPhotoAction', '_format' => 'json'], ['cid', 'id'], ['POST' => 0], null, false, false, null],
            [['_route' => 'v4_put_team_photo', '_controller' => 'App\\Controller\\API\\TeamController::setPhotoAction', '_format' => 'json'], ['cid', 'id'], ['PUT' => 0], null, false, false, null],
        ],
        3782 => [[['_route' => 'v4_app_api_team_add', '_controller' => 'App\\Controller\\API\\TeamController::addAction', '_format' => 'json'], ['cid'], ['POST' => 0], null, false, false, null]],
        3793 => [
            [['_route' => 'v4_app_api_contest_single', '_controller' => 'App\\Controller\\API\\ContestController::singleAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, true, null],
            [['_route' => 'v4_app_api_contest_changestarttime', '_controller' => 'App\\Controller\\API\\ContestController::changeStartTimeAction', '_format' => 'json'], ['cid'], ['PATCH' => 0], null, false, true, null],
        ],
        3833 => [[['_route' => 'v4_app_api_generalinfo_countryflag', '_controller' => 'App\\Controller\\API\\GeneralInfoController::countryFlagAction', '_format' => 'json'], ['countryCode', 'size'], ['GET' => 0], null, false, true, null]],
        3863 => [[['_route' => 'v4_app_api_executable_single', '_controller' => 'App\\Controller\\API\\ExecutableController::singleAction', '_format' => 'json'], ['id'], ['GET' => 0], null, false, true, null]],
        3894 => [[['_route' => 'v4_app_api_judgehost_updatejudgehost', '_controller' => 'App\\Controller\\API\\JudgehostController::updateJudgeHostAction', '_format' => 'json'], ['hostname'], ['PUT' => 0], null, false, true, null]],
        3936 => [[['_route' => 'v4_app_api_judgehost_updatejudging', '_controller' => 'App\\Controller\\API\\JudgehostController::updateJudgingAction', '_format' => 'json'], ['hostname', 'judgetaskid'], ['PUT' => 0], null, false, true, null]],
        3982 => [[['_route' => 'v4_app_api_judgehost_adddebuginfo', '_controller' => 'App\\Controller\\API\\JudgehostController::addDebugInfo', '_format' => 'json'], ['hostname', 'judgeTaskId'], ['POST' => 0], null, false, true, null]],
        4021 => [[['_route' => 'v4_app_api_judgehost_addjudgingrun', '_controller' => 'App\\Controller\\API\\JudgehostController::addJudgingRunAction', '_format' => 'json'], ['hostname', 'judgeTaskId'], ['POST' => 0], null, false, true, null]],
        4046 => [[['_route' => 'v4_app_api_judgehost_internalerror', '_controller' => 'App\\Controller\\API\\JudgehostController::internalErrorAction', '_format' => 'json'], [], ['POST' => 0], null, false, false, null]],
        4082 => [[['_route' => 'v4_app_api_judgehost_getfiles', '_controller' => 'App\\Controller\\API\\JudgehostController::getFilesAction', '_format' => 'json'], ['type', 'id'], ['GET' => 0], null, false, true, null]],
        4102 => [[['_route' => 'v4_app_api_judgehost_getjudgetasks', '_controller' => 'App\\Controller\\API\\JudgehostController::getJudgeTasksAction', '_format' => 'json'], [], ['POST' => 0], null, false, false, null]],
        4126 => [[['_route' => 'v4_app_api_user_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::singleAction'], ['id'], ['GET' => 0], null, false, true, null]],
        4180 => [[['_route' => 'current_app_api_account_list', '_controller' => 'App\\Controller\\API\\AccountController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        4198 => [[['_route' => 'current_app_api_account_single', '_controller' => 'App\\Controller\\API\\AccountController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        4208 => [[['_route' => 'current_app_api_account_getcurrent', '_controller' => 'App\\Controller\\API\\AccountController::getCurrentAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        4226 => [[['_route' => 'current_app_api_awards_list', '_controller' => 'App\\Controller\\API\\AwardsController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        4244 => [[['_route' => 'current_app_api_awards_single', '_controller' => 'App\\Controller\\API\\AwardsController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        4269 => [[['_route' => 'current_app_api_balloon_list', '_controller' => 'App\\Controller\\API\\BalloonController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        4292 => [[['_route' => 'current_app_api_balloon_markdone', '_controller' => 'App\\Controller\\API\\BalloonController::markDoneAction', '_format' => 'json'], ['cid', 'balloonId'], ['POST' => 0], null, false, false, null]],
        4309 => [
            [['_route' => 'current_contest_banner', '_controller' => 'App\\Controller\\API\\ContestController::bannerAction', '_format' => 'json'], ['id'], ['GET' => 0], null, false, false, null],
            [['_route' => 'current_delete_contest_banner', '_controller' => 'App\\Controller\\API\\ContestController::deleteBannerAction', '_format' => 'json'], ['id'], ['DELETE' => 0], null, false, false, null],
            [['_route' => 'current_post_contest_banner', '_controller' => 'App\\Controller\\API\\ContestController::setBannerAction', '_format' => 'json'], ['id'], ['POST' => 0], null, false, false, null],
            [['_route' => 'current_put_contest_banner', '_controller' => 'App\\Controller\\API\\ContestController::setBannerAction', '_format' => 'json'], ['id'], ['PUT' => 0], null, false, false, null],
        ],
        4340 => [[['_route' => 'current_app_api_clarification_list', '_controller' => 'App\\Controller\\API\\ClarificationController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        4361 => [
            [['_route' => 'current_app_api_clarification_single', '_controller' => 'App\\Controller\\API\\ClarificationController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'current_app_api_clarification_add_2', '_controller' => 'App\\Controller\\API\\ClarificationController::addAction', '_format' => 'json'], ['cid', 'id'], ['PUT' => 0], null, false, true, null],
        ],
        4371 => [[['_route' => 'current_app_api_clarification_add', '_controller' => 'App\\Controller\\API\\ClarificationController::addAction', '_format' => 'json'], ['cid'], ['POST' => 0], null, false, false, null]],
        4380 => [[['_route' => 'current_app_api_clarification_add_1', '_controller' => 'App\\Controller\\API\\ClarificationController::addAction', '_format' => 'json'], ['cid'], ['POST' => 0], null, true, false, null]],
        4402 => [[['_route' => 'current_app_api_contest_getcontestyaml', '_controller' => 'App\\Controller\\API\\ContestController::getContestYamlAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        4423 => [[['_route' => 'current_app_api_contest_getconteststate', '_controller' => 'App\\Controller\\API\\ContestController::getContestStateAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        4434 => [[['_route' => 'current_app_api_contest_getstatus', '_controller' => 'App\\Controller\\API\\ContestController::getStatusAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        4453 => [[['_route' => 'current_app_api_scoreboard_getscoreboard', '_controller' => 'App\\Controller\\API\\ScoreboardController::getScoreboardAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        4475 => [[['_route' => 'current_app_api_submission_list', '_controller' => 'App\\Controller\\API\\SubmissionController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        4496 => [
            [['_route' => 'current_app_api_submission_single', '_controller' => 'App\\Controller\\API\\SubmissionController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'current_app_api_submission_addsubmission_2', '_controller' => 'App\\Controller\\API\\SubmissionController::addSubmissionAction', '_format' => 'json'], ['cid', 'id'], ['PUT' => 0], null, false, true, null],
        ],
        4514 => [[['_route' => 'current_submission_files', '_controller' => 'App\\Controller\\API\\SubmissionController::getSubmissionFilesAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, false, null]],
        4535 => [[['_route' => 'current_app_api_submission_getsubmissionsourcecode', '_controller' => 'App\\Controller\\API\\SubmissionController::getSubmissionSourceCodeAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, false, null]],
        4546 => [[['_route' => 'current_app_api_submission_addsubmission', '_controller' => 'App\\Controller\\API\\SubmissionController::addSubmissionAction', '_format' => 'json'], ['cid'], ['POST' => 0], null, false, false, null]],
        4555 => [[['_route' => 'current_app_api_submission_addsubmission_1', '_controller' => 'App\\Controller\\API\\SubmissionController::addSubmissionAction', '_format' => 'json'], ['cid'], ['POST' => 0], null, true, false, null]],
        4577 => [[['_route' => 'current_app_api_contest_geteventfeed', '_controller' => 'App\\Controller\\API\\ContestController::getEventFeedAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        4595 => [[['_route' => 'current_app_api_group_list', '_controller' => 'App\\Controller\\API\\GroupController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        4613 => [[['_route' => 'current_app_api_group_single', '_controller' => 'App\\Controller\\API\\GroupController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        4622 => [[['_route' => 'current_app_api_group_add', '_controller' => 'App\\Controller\\API\\GroupController::addAction', '_format' => 'json'], ['cid'], ['POST' => 0], null, false, false, null]],
        4648 => [[['_route' => 'current_app_api_judgement_list', '_controller' => 'App\\Controller\\API\\JudgementController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        4666 => [[['_route' => 'current_app_api_judgement_single', '_controller' => 'App\\Controller\\API\\JudgementController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        4686 => [[['_route' => 'current_app_api_judgementtype_list', '_controller' => 'App\\Controller\\API\\JudgementTypeController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        4704 => [[['_route' => 'current_app_api_judgementtype_single', '_controller' => 'App\\Controller\\API\\JudgementTypeController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        4727 => [[['_route' => 'current_app_api_language_list', '_controller' => 'App\\Controller\\API\\LanguageController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        4745 => [[['_route' => 'current_app_api_language_single', '_controller' => 'App\\Controller\\API\\LanguageController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        4771 => [[['_route' => 'current_app_api_organization_list', '_controller' => 'App\\Controller\\API\\OrganizationController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        4792 => [[['_route' => 'current_app_api_organization_single', '_controller' => 'App\\Controller\\API\\OrganizationController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        4809 => [
            [['_route' => 'current_organization_logo', '_controller' => 'App\\Controller\\API\\OrganizationController::logoAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, false, null],
            [['_route' => 'current_delete_organization_logo', '_controller' => 'App\\Controller\\API\\OrganizationController::deleteLogoAction', '_format' => 'json'], ['cid', 'id'], ['DELETE' => 0], null, false, false, null],
            [['_route' => 'current_post_organization_logo', '_controller' => 'App\\Controller\\API\\OrganizationController::setLogoAction', '_format' => 'json'], ['cid', 'id'], ['POST' => 0], null, false, false, null],
            [['_route' => 'current_put_organization_logo', '_controller' => 'App\\Controller\\API\\OrganizationController::setLogoAction', '_format' => 'json'], ['cid', 'id'], ['PUT' => 0], null, false, false, null],
        ],
        4820 => [[['_route' => 'current_app_api_organization_add', '_controller' => 'App\\Controller\\API\\OrganizationController::addAction', '_format' => 'json'], ['cid'], ['POST' => 0], null, false, false, null]],
        4854 => [[['_route' => 'current_app_api_problem_addproblems', '_controller' => 'App\\Controller\\API\\ProblemController::addProblemsAction', '_format' => 'json'], ['cid'], ['POST' => 0], null, false, false, null]],
        4874 => [
            [['_route' => 'current_app_api_problem_unlinkproblem', '_controller' => 'App\\Controller\\API\\ProblemController::unlinkProblemAction', '_format' => 'json'], ['cid', 'id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'current_app_api_problem_linkproblem', '_controller' => 'App\\Controller\\API\\ProblemController::linkProblemAction', '_format' => 'json'], ['cid', 'id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'current_app_api_problem_single', '_controller' => 'App\\Controller\\API\\ProblemController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null],
        ],
        4885 => [
            [['_route' => 'current_app_api_problem_list', '_controller' => 'App\\Controller\\API\\ProblemController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null],
            [['_route' => 'current_app_api_problem_addproblem', '_controller' => 'App\\Controller\\API\\ProblemController::addProblemAction', '_format' => 'json'], ['cid'], ['POST' => 0], null, false, false, null],
        ],
        4902 => [[['_route' => 'current_app_api_run_list', '_controller' => 'App\\Controller\\API\\RunController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        4920 => [[['_route' => 'current_app_api_run_single', '_controller' => 'App\\Controller\\API\\RunController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        4938 => [[['_route' => 'current_app_api_team_list', '_controller' => 'App\\Controller\\API\\TeamController::listAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, false, null]],
        4959 => [[['_route' => 'current_app_api_team_single', '_controller' => 'App\\Controller\\API\\TeamController::singleAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, true, null]],
        4977 => [
            [['_route' => 'current_team_photo', '_controller' => 'App\\Controller\\API\\TeamController::photoAction', '_format' => 'json'], ['cid', 'id'], ['GET' => 0], null, false, false, null],
            [['_route' => 'current_delete_team_photo', '_controller' => 'App\\Controller\\API\\TeamController::deletePhotoAction', '_format' => 'json'], ['cid', 'id'], ['DELETE' => 0], null, false, false, null],
            [['_route' => 'current_post_team_photo', '_controller' => 'App\\Controller\\API\\TeamController::setPhotoAction', '_format' => 'json'], ['cid', 'id'], ['POST' => 0], null, false, false, null],
            [['_route' => 'current_put_team_photo', '_controller' => 'App\\Controller\\API\\TeamController::setPhotoAction', '_format' => 'json'], ['cid', 'id'], ['PUT' => 0], null, false, false, null],
        ],
        4988 => [[['_route' => 'current_app_api_team_add', '_controller' => 'App\\Controller\\API\\TeamController::addAction', '_format' => 'json'], ['cid'], ['POST' => 0], null, false, false, null]],
        4999 => [
            [['_route' => 'current_app_api_contest_single', '_controller' => 'App\\Controller\\API\\ContestController::singleAction', '_format' => 'json'], ['cid'], ['GET' => 0], null, false, true, null],
            [['_route' => 'current_app_api_contest_changestarttime', '_controller' => 'App\\Controller\\API\\ContestController::changeStartTimeAction', '_format' => 'json'], ['cid'], ['PATCH' => 0], null, false, true, null],
        ],
        5039 => [[['_route' => 'current_app_api_generalinfo_countryflag', '_controller' => 'App\\Controller\\API\\GeneralInfoController::countryFlagAction', '_format' => 'json'], ['countryCode', 'size'], ['GET' => 0], null, false, true, null]],
        5069 => [[['_route' => 'current_app_api_executable_single', '_controller' => 'App\\Controller\\API\\ExecutableController::singleAction', '_format' => 'json'], ['id'], ['GET' => 0], null, false, true, null]],
        5100 => [[['_route' => 'current_app_api_judgehost_updatejudgehost', '_controller' => 'App\\Controller\\API\\JudgehostController::updateJudgeHostAction', '_format' => 'json'], ['hostname'], ['PUT' => 0], null, false, true, null]],
        5142 => [[['_route' => 'current_app_api_judgehost_updatejudging', '_controller' => 'App\\Controller\\API\\JudgehostController::updateJudgingAction', '_format' => 'json'], ['hostname', 'judgetaskid'], ['PUT' => 0], null, false, true, null]],
        5188 => [[['_route' => 'current_app_api_judgehost_adddebuginfo', '_controller' => 'App\\Controller\\API\\JudgehostController::addDebugInfo', '_format' => 'json'], ['hostname', 'judgeTaskId'], ['POST' => 0], null, false, true, null]],
        5227 => [[['_route' => 'current_app_api_judgehost_addjudgingrun', '_controller' => 'App\\Controller\\API\\JudgehostController::addJudgingRunAction', '_format' => 'json'], ['hostname', 'judgeTaskId'], ['POST' => 0], null, false, true, null]],
        5252 => [[['_route' => 'current_app_api_judgehost_internalerror', '_controller' => 'App\\Controller\\API\\JudgehostController::internalErrorAction', '_format' => 'json'], [], ['POST' => 0], null, false, false, null]],
        5288 => [[['_route' => 'current_app_api_judgehost_getfiles', '_controller' => 'App\\Controller\\API\\JudgehostController::getFilesAction', '_format' => 'json'], ['type', 'id'], ['GET' => 0], null, false, true, null]],
        5308 => [[['_route' => 'current_app_api_judgehost_getjudgetasks', '_controller' => 'App\\Controller\\API\\JudgehostController::getJudgeTasksAction', '_format' => 'json'], [], ['POST' => 0], null, false, false, null]],
        5332 => [
            [['_route' => 'current_app_api_user_single', '_format' => 'json', '_controller' => 'App\\Controller\\API\\UserController::singleAction'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
