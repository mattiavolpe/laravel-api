## 2024-05-24 - Database Level Optimizations for Collections
**Learning:** Loading entire Eloquent collections into PHP memory using \`get()\` simply to count them (\`count($model->get())\`) or access the first/last elements (\`$collection[0]\`) is a severe performance bottleneck and can cause memory exhaustion.
**Action:** When calculating counts or retrieving specific boundary records, construct queries using \`(clone $query)->count()\`, \`latest()->first()\`, and \`oldest()->first()\` to execute the operations directly at the database level.
