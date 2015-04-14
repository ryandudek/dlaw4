<?php
/**
 * @file
 * roles_and_permissions.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function roles_and_permissions_user_default_permissions() {
  $permissions = array();

  // Exported permission: 'administer blocks'.
  $permissions['administer blocks'] = array(
    'name' => 'administer blocks',
    'roles' => array(),
    'module' => 'block',
  );

  // Exported permission: 'administer dlaw blocks'.
  $permissions['administer dlaw blocks'] = array(
    'name' => 'administer dlaw blocks',
    'roles' => array(
      'manager' => 'manager',
    ),
    'module' => 'frontlayout',
  );

  return $permissions;
}
