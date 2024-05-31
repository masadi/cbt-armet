export default [
  {
    path: '/dashboard',
    name: 'dashboard',
    component: () => import('@/views/dashboard/Index.vue'),
    meta: {
      //navActiveLink: 'dashboard',
      resource: 'Web',
      action: 'read',
      pageTitle: 'Beranda',
      breadcrumb: [
        {
          text: 'Beranda',
          active: true,
        },
      ],
    },
  },
  {
    path: '/ujian',
    name: 'ujian',
    component: () => import('@/views/ujian/Index.vue'),
    meta: {
      resource: 'PD',
      action: 'read',
      pageTitle: 'Mata Ujian',
      breadcrumb: [
        {
          text: 'Mata Ujian',
          active: true,
        },
      ],
    },
  },
  {
    path: '/proses-ujian/:anggota_rombel_id/:soal_ujian_id',
    name: 'proses-ujian',
    component: () => import('@/views/ujian/ProsesUjian.vue'),
    meta: {
      layout: 'full',
      resource: 'PD',
      action: 'read',
      pageTitle: 'Proses Ujian',
      breadcrumb: [
        {
          text: 'Mata Ujian',
          active: true,
        },
      ],
    },
  },
]
