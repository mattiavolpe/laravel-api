## 2024-05-20 - Prevent IDOR in Project Controller
**Vulnerability:** Insecure Direct Object Reference (IDOR) in `ProjectController` allowing any authenticated user to view, edit, update, or delete projects belonging to other users.
**Learning:** The controller used implicit route model binding for user-specific resources without explicitly enforcing ownership checks or using a Policy.
**Prevention:** Manually enforce explicit ownership checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) on all user-specific resource routes utilizing route model binding, or implement and use Laravel Policies.
