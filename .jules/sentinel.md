## 2024-05-24 - IDOR Vulnerability in Resource Controllers
**Vulnerability:** Insecure Direct Object Reference (IDOR) in `ProjectController`. Users could view, edit, update, or delete projects belonging to other users because route model binding implicitly fetched the resource without an ownership check.
**Learning:** Even though the `index` method filters projects by the authenticated user, implicit route model binding (e.g., `public function show(Project $project)`) does not automatically scope the bound model to the current user.
**Prevention:** Always explicitly verify resource ownership (`if ($model->user_id != auth()->id()) abort(403);`) in controller methods that accept a model instance, or scope the query globally for the authenticated user.
