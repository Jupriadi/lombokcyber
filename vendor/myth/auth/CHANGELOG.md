# Changelog

## [1.0-beta.3](https://github.com/lonnieezell/myth-auth/tree/1.0-beta.3)

[Full Changelog](https://github.com/lonnieezell/myth-auth/compare/1.0-beta.2...1.0-beta.3)

**Implemented enhancements:**

- \[Request\] Add new feature on user entity getRoles\(\) [\#179](https://github.com/lonnieezell/myth-auth/issues/179)
- Add ability to publish filters [\#175](https://github.com/lonnieezell/myth-auth/issues/175)
- Resend activation email feature. [\#148](https://github.com/lonnieezell/myth-auth/issues/148)

**Fixed bugs:**

- LIbrary allows create two groups with same name [\#147](https://github.com/lonnieezell/myth-auth/issues/147)

**Closed issues:**

- Remove email system inside activation interface [\#224](https://github.com/lonnieezell/myth-auth/issues/224)
- OTP or Authenticator ? [\#219](https://github.com/lonnieezell/myth-auth/issues/219)
- Not logged in after successfull login attempt. [\#218](https://github.com/lonnieezell/myth-auth/issues/218)
- How to access user attributes? [\#212](https://github.com/lonnieezell/myth-auth/issues/212)
- "Remember me" function [\#211](https://github.com/lonnieezell/myth-auth/issues/211)
- ValidatioRule "strong\_password" conflict validation system [\#210](https://github.com/lonnieezell/myth-auth/issues/210)
- Can I seed users from begining without using register function? [\#209](https://github.com/lonnieezell/myth-auth/issues/209)
-   \[InvalidArgumentException\] [\#208](https://github.com/lonnieezell/myth-auth/issues/208)
- auth.validFields in .env file are ignored [\#207](https://github.com/lonnieezell/myth-auth/issues/207)
- $defaultUserGroup missing [\#206](https://github.com/lonnieezell/myth-auth/issues/206)
- register exception missing in LoginFilter-\>before [\#205](https://github.com/lonnieezell/myth-auth/issues/205)
- Helper. Bug at logged\_in function [\#204](https://github.com/lonnieezell/myth-auth/issues/204)
- Required fields for registration [\#203](https://github.com/lonnieezell/myth-auth/issues/203)
- Error on Insert new User [\#201](https://github.com/lonnieezell/myth-auth/issues/201)
- Infinite loop on register URL [\#200](https://github.com/lonnieezell/myth-auth/issues/200)
- Remember user or email on submit login form [\#199](https://github.com/lonnieezell/myth-auth/issues/199)
- change password function [\#195](https://github.com/lonnieezell/myth-auth/issues/195)
- Use an existing table instead of `users` table for authentication [\#191](https://github.com/lonnieezell/myth-auth/issues/191)
- Error when running "php spark migrate -all" [\#189](https://github.com/lonnieezell/myth-auth/issues/189)
- attemptLogin\(\) with force\_pass\_reset [\#183](https://github.com/lonnieezell/myth-auth/issues/183)
- \[Request\] Events [\#182](https://github.com/lonnieezell/myth-auth/issues/182)
- CLI command to create\_user fails - password\_hash is required [\#180](https://github.com/lonnieezell/myth-auth/issues/180)
- \[HELP\] Automatic Logins [\#174](https://github.com/lonnieezell/myth-auth/issues/174)
- Extension to AuthController fails to "use" custom User entity & model [\#173](https://github.com/lonnieezell/myth-auth/issues/173)
- Potential Security Issues [\#172](https://github.com/lonnieezell/myth-auth/issues/172)
- \[Question, Help\] How i do to check list of permissions\(\) if used by user then disable delete  [\#170](https://github.com/lonnieezell/myth-auth/issues/170)
- SUGESTION: change throw exception filter [\#169](https://github.com/lonnieezell/myth-auth/issues/169)
- Bug: PermissionModel, function doesUserHavePermission [\#165](https://github.com/lonnieezell/myth-auth/issues/165)
- Default groups when registering [\#164](https://github.com/lonnieezell/myth-auth/issues/164)
- function isLoggedIn inside AuthenticationBase always fails [\#163](https://github.com/lonnieezell/myth-auth/issues/163)
- Question, Help [\#161](https://github.com/lonnieezell/myth-auth/issues/161)
- Consideration: Change username validation [\#159](https://github.com/lonnieezell/myth-auth/issues/159)
- Cannot view Register and Activate Account pages if Auth is set to work globally [\#158](https://github.com/lonnieezell/myth-auth/issues/158)
- Login: show error message when username/email is not record on database [\#154](https://github.com/lonnieezell/myth-auth/issues/154)
- find the permissions of a group [\#152](https://github.com/lonnieezell/myth-auth/issues/152)
- redirect [\#151](https://github.com/lonnieezell/myth-auth/issues/151)
- When the user is logged in, the user should not be able to enter the register page. [\#149](https://github.com/lonnieezell/myth-auth/issues/149)
- Can't create "Users" table - Foreign key constraint is incorrectly formed [\#144](https://github.com/lonnieezell/myth-auth/issues/144)

**Merged pull requests:**

- Filter post data on registration [\#229](https://github.com/lonnieezell/myth-auth/pull/229) ([michalsn](https://github.com/michalsn))
- Make resetting password more customizable [\#228](https://github.com/lonnieezell/myth-auth/pull/228) ([michalsn](https://github.com/michalsn))
- Test fixes [\#226](https://github.com/lonnieezell/myth-auth/pull/226) ([michalsn](https://github.com/michalsn))
- Redirect with cookies [\#225](https://github.com/lonnieezell/myth-auth/pull/225) ([michalsn](https://github.com/michalsn))
- Added russian language [\#223](https://github.com/lonnieezell/myth-auth/pull/223) ([oleg1540](https://github.com/oleg1540))
- Support for assigning validation data to strong\_password method [\#222](https://github.com/lonnieezell/myth-auth/pull/222) ([michalsn](https://github.com/michalsn))
- Switch to using check method in logged\_in. Fixes \#204 [\#221](https://github.com/lonnieezell/myth-auth/pull/221) ([lonnieezell](https://github.com/lonnieezell))
- Add register route as exception in LoginFilter. Fixes \#205 [\#220](https://github.com/lonnieezell/myth-auth/pull/220) ([lonnieezell](https://github.com/lonnieezell))
- Add docs for defaultUserGroup config variable [\#217](https://github.com/lonnieezell/myth-auth/pull/217) ([michalsn](https://github.com/michalsn))
- Fix the call for validation errors messages [\#216](https://github.com/lonnieezell/myth-auth/pull/216) ([michalsn](https://github.com/michalsn))
- Update README.md [\#197](https://github.com/lonnieezell/myth-auth/pull/197) ([JamesShaver](https://github.com/JamesShaver))
- Force pass reset [\#194](https://github.com/lonnieezell/myth-auth/pull/194) ([erikkloeze](https://github.com/erikkloeze))
- Remove `extra` `use` statement in `Login Model` [\#193](https://github.com/lonnieezell/myth-auth/pull/193) ([atefBB](https://github.com/atefBB))
- Banned user error message [\#192](https://github.com/lonnieezell/myth-auth/pull/192) ([erikkloeze](https://github.com/erikkloeze))
- Fix namespace group model [\#190](https://github.com/lonnieezell/myth-auth/pull/190) ([agungsugiarto](https://github.com/agungsugiarto))
- User entity in Validation Rules [\#188](https://github.com/lonnieezell/myth-auth/pull/188) ([erikkloeze](https://github.com/erikkloeze))
- Add function getRoles\(\) on user entity [\#186](https://github.com/lonnieezell/myth-auth/pull/186) ([agungsugiarto](https://github.com/agungsugiarto))
- Update authorization.md [\#178](https://github.com/lonnieezell/myth-auth/pull/178) ([JamesShaver](https://github.com/JamesShaver))
- Italian translation [\#177](https://github.com/lonnieezell/myth-auth/pull/177) ([Vizzielli](https://github.com/Vizzielli))
- Add filter publishing [\#176](https://github.com/lonnieezell/myth-auth/pull/176) ([michalsn](https://github.com/michalsn))
- Add Brazilian Portuguese translation [\#171](https://github.com/lonnieezell/myth-auth/pull/171) ([diegovernan](https://github.com/diegovernan))
- Fix doesUserHavePermission \#165 [\#168](https://github.com/lonnieezell/myth-auth/pull/168) ([michalsn](https://github.com/michalsn))
- Fix tests [\#167](https://github.com/lonnieezell/myth-auth/pull/167) ([michalsn](https://github.com/michalsn))
- Add validation for creating groups and permissions [\#166](https://github.com/lonnieezell/myth-auth/pull/166) ([michalsn](https://github.com/michalsn))
- Missing invalidPassword key in language files [\#162](https://github.com/lonnieezell/myth-auth/pull/162) ([eafarooqi](https://github.com/eafarooqi))
- Add option to resend activation code - fix \#148 [\#160](https://github.com/lonnieezell/myth-auth/pull/160) ([michalsn](https://github.com/michalsn))
- Add required fields to CreateUser [\#157](https://github.com/lonnieezell/myth-auth/pull/157) ([MGatner](https://github.com/MGatner))
- Modified AuthController-\>attemptRegister\(\) validation rules [\#155](https://github.com/lonnieezell/myth-auth/pull/155) ([rodrigokestler](https://github.com/rodrigokestler))
- Group permissions \(from paul45\) [\#153](https://github.com/lonnieezell/myth-auth/pull/153) ([MGatner](https://github.com/MGatner))
- check if already logged in in register method [\#150](https://github.com/lonnieezell/myth-auth/pull/150) ([titounnes](https://github.com/titounnes))

## [1.0-beta.2](https://github.com/lonnieezell/myth-auth/tree/1.0-beta.2) (2019-12-12)

[Full Changelog](https://github.com/lonnieezell/myth-auth/compare/v1.0-beta...1.0-beta.2)

**Closed issues:**

- Change "return redirect\('/\);" to "return redirect\(\)-\>to\('/'\);" [\#143](https://github.com/lonnieezell/myth-auth/issues/143)
- ERROR Using PHP 7.4.0 Database [\#142](https://github.com/lonnieezell/myth-auth/issues/142)
- Feature: external authentication hooks [\#141](https://github.com/lonnieezell/myth-auth/issues/141)
- how override Config/Auth.php  [\#139](https://github.com/lonnieezell/myth-auth/issues/139)
- Please remove [\#136](https://github.com/lonnieezell/myth-auth/issues/136)
- Idea: Filter helper load [\#135](https://github.com/lonnieezell/myth-auth/issues/135)
- performance proposal - Store data in static variable [\#134](https://github.com/lonnieezell/myth-auth/issues/134)
- doesUserHavePermission [\#131](https://github.com/lonnieezell/myth-auth/issues/131)
- I can not change user password on check of current password [\#130](https://github.com/lonnieezell/myth-auth/issues/130)
- Issue on installing with composer [\#128](https://github.com/lonnieezell/myth-auth/issues/128)
- Undefined property CSRFHeaderName  [\#125](https://github.com/lonnieezell/myth-auth/issues/125)
- name is not a property of the Entity user [\#124](https://github.com/lonnieezell/myth-auth/issues/124)
- Error Register [\#118](https://github.com/lonnieezell/myth-auth/issues/118)
- Core Version [\#115](https://github.com/lonnieezell/myth-auth/issues/115)
- Permissions for user [\#106](https://github.com/lonnieezell/myth-auth/issues/106)
- Error with failed login [\#105](https://github.com/lonnieezell/myth-auth/issues/105)
- Validation errors [\#104](https://github.com/lonnieezell/myth-auth/issues/104)
- Request: interface for using Authorization [\#103](https://github.com/lonnieezell/myth-auth/issues/103)
- Publish views error [\#101](https://github.com/lonnieezell/myth-auth/issues/101)
- Error forgot password [\#100](https://github.com/lonnieezell/myth-auth/issues/100)
- Register Error [\#99](https://github.com/lonnieezell/myth-auth/issues/99)
- Reset\* vars in user don't get nullified when password is changed [\#95](https://github.com/lonnieezell/myth-auth/issues/95)
- LoginFilter messes with get's token parameter \(reset-password\) [\#94](https://github.com/lonnieezell/myth-auth/issues/94)
- Reset\* vars in user don't get nullified when password is changed [\#90](https://github.com/lonnieezell/myth-auth/issues/90)
- Myth's routes cannot be overridden by App's ones [\#89](https://github.com/lonnieezell/myth-auth/issues/89)
- Exception when logging in with non-existant username [\#87](https://github.com/lonnieezell/myth-auth/issues/87)
- AuthTrait redirects won't currently [\#86](https://github.com/lonnieezell/myth-auth/issues/86)
- Request: Publish to Packagist [\#84](https://github.com/lonnieezell/myth-auth/issues/84)
- Old version of Migration commands [\#77](https://github.com/lonnieezell/myth-auth/issues/77)
- CPU 100% [\#43](https://github.com/lonnieezell/myth-auth/issues/43)
- Social login [\#26](https://github.com/lonnieezell/myth-auth/issues/26)

**Merged pull requests:**

- Default return URL to previous page [\#146](https://github.com/lonnieezell/myth-auth/pull/146) ([MGatner](https://github.com/MGatner))
- Specify null return when no user [\#145](https://github.com/lonnieezell/myth-auth/pull/145) ([MGatner](https://github.com/MGatner))
- Added Turkish translation [\#140](https://github.com/lonnieezell/myth-auth/pull/140) ([hatsat32](https://github.com/hatsat32))
- Preload helpers on all filters [\#138](https://github.com/lonnieezell/myth-auth/pull/138) ([MGatner](https://github.com/MGatner))
- Install docs [\#137](https://github.com/lonnieezell/myth-auth/pull/137) ([MGatner](https://github.com/MGatner))
- Correct countAll to countAllResults [\#133](https://github.com/lonnieezell/myth-auth/pull/133) ([MGatner](https://github.com/MGatner))
- Replace invalidUser with badAttempt [\#132](https://github.com/lonnieezell/myth-auth/pull/132) ([MGatner](https://github.com/MGatner))
- Change isActive to be type agnostic [\#129](https://github.com/lonnieezell/myth-auth/pull/129) ([MGatner](https://github.com/MGatner))
- NothingPersonalValidator class [\#127](https://github.com/lonnieezell/myth-auth/pull/127) ([dafriend](https://github.com/dafriend))
- Implement view layout [\#123](https://github.com/lonnieezell/myth-auth/pull/123) ([MGatner](https://github.com/MGatner))
- Always use Config\Services to allow users to override with their own service. [\#122](https://github.com/lonnieezell/myth-auth/pull/122) ([lonnieezell](https://github.com/lonnieezell))
- Validation fix for username [\#121](https://github.com/lonnieezell/myth-auth/pull/121) ([michalsn](https://github.com/michalsn))
- Proposal - confirm registration \(optional\) [\#120](https://github.com/lonnieezell/myth-auth/pull/120) ([michalsn](https://github.com/michalsn))
- Provided links to summary and detail re: Flat RBAC [\#119](https://github.com/lonnieezell/myth-auth/pull/119) ([zigmoo](https://github.com/zigmoo))
- Fix user entity permissions [\#117](https://github.com/lonnieezell/myth-auth/pull/117) ([MGatner](https://github.com/MGatner))
- Update tests to new ModuleTests convention [\#116](https://github.com/lonnieezell/myth-auth/pull/116) ([MGatner](https://github.com/MGatner))
- Fixes \#104 [\#114](https://github.com/lonnieezell/myth-auth/pull/114) ([michalsn](https://github.com/michalsn))
- Fixes \#99 [\#113](https://github.com/lonnieezell/myth-auth/pull/113) ([michalsn](https://github.com/michalsn))
- Revise PwnedValidator::check\(\) [\#112](https://github.com/lonnieezell/myth-auth/pull/112) ([dafriend](https://github.com/dafriend))
- Fix token expired bug [\#111](https://github.com/lonnieezell/myth-auth/pull/111) ([michalsn](https://github.com/michalsn))
- Fixes \#100 [\#110](https://github.com/lonnieezell/myth-auth/pull/110) ([michalsn](https://github.com/michalsn))
- Check for allowRemembering in view [\#109](https://github.com/lonnieezell/myth-auth/pull/109) ([michalsn](https://github.com/michalsn))
- Add PwnedValidator [\#108](https://github.com/lonnieezell/myth-auth/pull/108) ([michalsn](https://github.com/michalsn))
- Fix validation rule bug for registration [\#107](https://github.com/lonnieezell/myth-auth/pull/107) ([michalsn](https://github.com/michalsn))
- Change mkdir to recurse [\#102](https://github.com/lonnieezell/myth-auth/pull/102) ([MGatner](https://github.com/MGatner))
- fix mistype in docs [\#98](https://github.com/lonnieezell/myth-auth/pull/98) ([hatsat32](https://github.com/hatsat32))
- Implement CIModuleTests [\#97](https://github.com/lonnieezell/myth-auth/pull/97) ([MGatner](https://github.com/MGatner))
- Set reset\* variables to null after password change [\#96](https://github.com/lonnieezell/myth-auth/pull/96) ([fefo-p](https://github.com/fefo-p))
- Add CLI command create\_user [\#92](https://github.com/lonnieezell/myth-auth/pull/92) ([MGatner](https://github.com/MGatner))
- Fixes \#87 [\#88](https://github.com/lonnieezell/myth-auth/pull/88) ([fefo-p](https://github.com/fefo-p))

## [v1.0-beta](https://github.com/lonnieezell/myth-auth/tree/v1.0-beta) (2019-08-29)

[Full Changelog](https://github.com/lonnieezell/myth-auth/compare/12eaf48540e0f20c5e5c9b2ba5ddaf8b4a893af0...v1.0-beta)

**Closed issues:**

- attemptReset does not check for token existance before resetting passwd [\#79](https://github.com/lonnieezell/myth-auth/issues/79)
- route to reset-password being redirected to login [\#78](https://github.com/lonnieezell/myth-auth/issues/78)
- Spanish text in view [\#75](https://github.com/lonnieezell/myth-auth/issues/75)
- PASSWORD\_ARGON2ID is a conditional constant [\#73](https://github.com/lonnieezell/myth-auth/issues/73)
- Rolefilter does not end well when more than one role is checked [\#64](https://github.com/lonnieezell/myth-auth/issues/64)
- Filter parameters don't seem to be in CI4 [\#38](https://github.com/lonnieezell/myth-auth/issues/38)
- Fresh install - Invalid File [\#33](https://github.com/lonnieezell/myth-auth/issues/33)
- discoverLocal [\#32](https://github.com/lonnieezell/myth-auth/issues/32)
- Config autoload causing Composer failures [\#31](https://github.com/lonnieezell/myth-auth/issues/31)
- Filter parameters [\#30](https://github.com/lonnieezell/myth-auth/issues/30)
- Permission error [\#27](https://github.com/lonnieezell/myth-auth/issues/27)
- Permission Model does not get User permissions [\#22](https://github.com/lonnieezell/myth-auth/issues/22)
- Permission ID not being get [\#20](https://github.com/lonnieezell/myth-auth/issues/20)
- $this-\>error in FlatAuthorization not being shown [\#19](https://github.com/lonnieezell/myth-auth/issues/19)
- Status "not logged in" message appears after logout [\#18](https://github.com/lonnieezell/myth-auth/issues/18)
- Application view files do not override packaged views. [\#17](https://github.com/lonnieezell/myth-auth/issues/17)
- Take builder out from $this-\>builder\(\)-\>select\(\) in GroupModel.php [\#11](https://github.com/lonnieezell/myth-auth/issues/11)
- Services::authorization\(\) instead of authentication\(\) [\#10](https://github.com/lonnieezell/myth-auth/issues/10)
- Routes read from Myth's config instead of App's config \(ie: will not read App AuthController\) [\#9](https://github.com/lonnieezell/myth-auth/issues/9)
- Missing Auth in namespace \(2\) [\#8](https://github.com/lonnieezell/myth-auth/issues/8)
- Missing Auth in namespace [\#7](https://github.com/lonnieezell/myth-auth/issues/7)
- redirect not working in AuthTrait [\#6](https://github.com/lonnieezell/myth-auth/issues/6)
- Missing id\(\) func in AuthenticationBase [\#5](https://github.com/lonnieezell/myth-auth/issues/5)
- Namespace: Auth missing [\#4](https://github.com/lonnieezell/myth-auth/issues/4)
- Namespace: should it be Myth\Auth\Authorization? [\#3](https://github.com/lonnieezell/myth-auth/issues/3)
- find\_all\(\) instead of findAll\(\) [\#2](https://github.com/lonnieezell/myth-auth/issues/2)
- as\_array\(\) instead of asArray\(\) [\#1](https://github.com/lonnieezell/myth-auth/issues/1)

**Merged pull requests:**

- Update migrate command syntax [\#85](https://github.com/lonnieezell/myth-auth/pull/85) ([MGatner](https://github.com/MGatner))
- Fix table name in down\(\) [\#83](https://github.com/lonnieezell/myth-auth/pull/83) ([MGatner](https://github.com/MGatner))
- Disable soft deletes on LoginModel [\#82](https://github.com/lonnieezell/myth-auth/pull/82) ([MGatner](https://github.com/MGatner))
- Fixes \#79 [\#81](https://github.com/lonnieezell/myth-auth/pull/81) ([fefo-p](https://github.com/fefo-p))
- Fixes \#78 [\#80](https://github.com/lonnieezell/myth-auth/pull/80) ([fefo-p](https://github.com/fefo-p))
- Added translation to static placeholders text \(fix \#75\) [\#76](https://github.com/lonnieezell/myth-auth/pull/76) ([fefo-p](https://github.com/fefo-p))
- Added defined\('PASSWORD\_ARGON2I'\) to condition check in user entity [\#74](https://github.com/lonnieezell/myth-auth/pull/74) ([fefo-p](https://github.com/fefo-p))
- Check for banned user upon login [\#72](https://github.com/lonnieezell/myth-auth/pull/72) ([fefo-p](https://github.com/fefo-p))
- Added group info to Toolbar debug info [\#71](https://github.com/lonnieezell/myth-auth/pull/71) ([fefo-p](https://github.com/fefo-p))
- Added spanish translation [\#70](https://github.com/lonnieezell/myth-auth/pull/70) ([fefo-p](https://github.com/fefo-p))
- Fixes \#64 inGroup method to check with OR instead of AND [\#69](https://github.com/lonnieezell/myth-auth/pull/69) ([fefo-p](https://github.com/fefo-p))
- Multiple hashing algorithm option [\#68](https://github.com/lonnieezell/myth-auth/pull/68) ([fefo-p](https://github.com/fefo-p))
- Add Auth helper and docs [\#62](https://github.com/lonnieezell/myth-auth/pull/62) ([MGatner](https://github.com/MGatner))
- Login fields respect $config-\>validFields [\#61](https://github.com/lonnieezell/myth-auth/pull/61) ([MGatner](https://github.com/MGatner))
- Leverage updated config\(\) functionality [\#60](https://github.com/lonnieezell/myth-auth/pull/60) ([MGatner](https://github.com/MGatner))
- Call user config class directly [\#58](https://github.com/lonnieezell/myth-auth/pull/58) ([MGatner](https://github.com/MGatner))
- Change filters to use $params as array [\#57](https://github.com/lonnieezell/myth-auth/pull/57) ([MGatner](https://github.com/MGatner))
- Change loginModel return type [\#56](https://github.com/lonnieezell/myth-auth/pull/56) ([MGatner](https://github.com/MGatner))
- Replace findWhere [\#55](https://github.com/lonnieezell/myth-auth/pull/55) ([MGatner](https://github.com/MGatner))
- Add missing close bracket [\#54](https://github.com/lonnieezell/myth-auth/pull/54) ([MGatner](https://github.com/MGatner))
- Update for `deleted\_at` [\#53](https://github.com/lonnieezell/myth-auth/pull/53) ([MGatner](https://github.com/MGatner))
- Add redirects to filters [\#52](https://github.com/lonnieezell/myth-auth/pull/52) ([MGatner](https://github.com/MGatner))
- Add LoginFilter to check for any user [\#51](https://github.com/lonnieezell/myth-auth/pull/51) ([MGatner](https://github.com/MGatner))
- Add collector info, rename "application" path [\#50](https://github.com/lonnieezell/myth-auth/pull/50) ([MGatner](https://github.com/MGatner))
- Add support for `$allowRegistration` config setting [\#49](https://github.com/lonnieezell/myth-auth/pull/49) ([MGatner](https://github.com/MGatner))
- Change dash to underscore [\#48](https://github.com/lonnieezell/myth-auth/pull/48) ([titounnes](https://github.com/titounnes))
- change composite index for email to unique key. [\#47](https://github.com/lonnieezell/myth-auth/pull/47) ([titounnes](https://github.com/titounnes))
- Remove `name` field [\#46](https://github.com/lonnieezell/myth-auth/pull/46) ([MGatner](https://github.com/MGatner))
- Change command dashes to underscores [\#45](https://github.com/lonnieezell/myth-auth/pull/45) ([MGatner](https://github.com/MGatner))
- add a name field to match the AuthController line 141 [\#44](https://github.com/lonnieezell/myth-auth/pull/44) ([titounnes](https://github.com/titounnes))
- Add initial CLI commands [\#42](https://github.com/lonnieezell/myth-auth/pull/42) ([MGatner](https://github.com/MGatner))
- First pass at toolbar collector \(basic\) [\#41](https://github.com/lonnieezell/myth-auth/pull/41) ([MGatner](https://github.com/MGatner))
- Add login/logout events [\#40](https://github.com/lonnieezell/myth-auth/pull/40) ([MGatner](https://github.com/MGatner))
- Update filters, support silent operation, allow user config [\#39](https://github.com/lonnieezell/myth-auth/pull/39) ([MGatner](https://github.com/MGatner))
- Fix for \#17 \(low priority\) [\#37](https://github.com/lonnieezell/myth-auth/pull/37) ([MGatner](https://github.com/MGatner))
- Add missing bracket in validation [\#36](https://github.com/lonnieezell/myth-auth/pull/36) ([MGatner](https://github.com/MGatner))
- Drop constraints before tables [\#35](https://github.com/lonnieezell/myth-auth/pull/35) ([MGatner](https://github.com/MGatner))
- Fix Authorization service [\#34](https://github.com/lonnieezell/myth-auth/pull/34) ([MGatner](https://github.com/MGatner))
- Fix broken links to old user guide [\#29](https://github.com/lonnieezell/myth-auth/pull/29) ([MGatner](https://github.com/MGatner))
- Fix link formatting in README [\#28](https://github.com/lonnieezell/myth-auth/pull/28) ([MGatner](https://github.com/MGatner))
- Replace setMessage with setFlashdata [\#25](https://github.com/lonnieezell/myth-auth/pull/25) ([fefo-p](https://github.com/fefo-p))
- Get combined user & group permissions \(fixes \#22\) [\#24](https://github.com/lonnieezell/myth-auth/pull/24) ([fefo-p](https://github.com/fefo-p))
- Permission ID get \(fixes \#20\) [\#21](https://github.com/lonnieezell/myth-auth/pull/21) ([fefo-p](https://github.com/fefo-p))
- Namespace conversion on first install [\#16](https://github.com/lonnieezell/myth-auth/pull/16) ([fefo-p](https://github.com/fefo-p))
- Authorization missed calling [\#15](https://github.com/lonnieezell/myth-auth/pull/15) ([fefo-p](https://github.com/fefo-p))
- Authentication id\(\) method missing [\#14](https://github.com/lonnieezell/myth-auth/pull/14) ([fefo-p](https://github.com/fefo-p))



\* *This Changelog was automatically generated by [github_changelog_generator](https://github.com/github-changelog-generator/github-changelog-generator)*
