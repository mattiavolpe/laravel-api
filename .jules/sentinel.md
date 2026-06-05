## 2024-05-31 - Missing authorization check in ProjectController
**Vulnerability:** Missing authorization check on show, edit, update, and destroy routes of `ProjectController`. Since it uses implicit route model binding to fetch `$project`, anyone could modify or view a project owned by someone else.
**Learning:** Implicit route model binding in Laravel without Policies or explicit checks in controllers does not verify user ownership of the model, which leads to Insecure Direct Object Reference (IDOR) vulnerabilities.
**Prevention:** In applications using route model binding, ensure that ownership/authorization checks are applied either via Policies or manual checks within the controller (e.g., `if($project->user_id != Auth::id()) { abort(403); }`).
